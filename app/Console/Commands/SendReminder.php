<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Twilio\Rest\Client;
use App\Models\Reminder;
use Illuminate\Support\Facades\Mail;

class SendReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending reminder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        print_r('Sending reminders actively');
        $account_sid = env('TWILIO_SID');
        $account_token = env("TWILIO_TOKEN");
        $sending_number = env("TWILIO_NUMBER");
        $twilio_whatsapp_sandbox_num = env("TWILIO_WHATSAPP_SANDBOX_NUMBER");
        $twilio_client = new Client($account_sid, $account_token);
        while (true) {
            $now = Carbon::now('Africa/Lagos')->toDateTimeString();
            $reminders = Reminder::where('status', '0')->get();
            foreach ($reminders as $reminder) {
                if ($reminder->timezoneoffset <= $now) {
                    //SMS
                    $twilio_client->messages->create(
                        $reminder->mobile_no,
                        array("from" => $sending_number, "body" => "Reminder for: $reminder->message")
                    );
                    //Email
                    try {
                        Mail::raw($reminder->message, function ($message) {
                            $message
                                ->to('$reminder->email')
                                ->subject('Reminder Email');
                        });
                    } catch (\Exception $e) {
                        dump('was not able to send Email, check that your email is configured correctly' . ' or this error: ' . $e);
                    }
                    //Whatsapp
                    try {
                        $message = $twilio_client->messages->create(
                            "whatsapp: $reminder->mobile_no", // to
                            array(
                                "from" => "whatsapp:$twilio_whatsapp_sandbox_num",
                                "body" => "Reminder for: $reminder->message"
                            )
                        );
                    } catch (\Exception $e) {
                        dump('was not able to send whatsapp message, check your whatsapp sandbox configuration' . ' or this error: ' . $e);
                    }
                    Reminder::where('id', $reminder->id)->update(['status' => '1']);
                    dump('Notification sent to' . $reminder->mobile_no);
                }
            }
            \sleep(1);
        }
    }
}
