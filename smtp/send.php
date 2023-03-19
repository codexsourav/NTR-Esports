<?php


function sendMail($name, $matchTime,  $email, $tid)
{
    include('index.php');
    $html = '
    <main style="margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif;">
        <header style="margin: 0; box-sizing: border-box; width: 100%; padding: 20px 0px; background-color: #232324; color: #fff;">
            <center style="margin: 0; padding: 0; box-sizing: border-box;">
                <h4 style="margin: 0; padding: 0; box-sizing: border-box;">NTR ESPORTS</h4>
            </center>
        </header>
        <div class="content" style="margin: 0; box-sizing: border-box; padding: 30px;">
            <p style="margin: 0; box-sizing: border-box; padding: 4px 0px;">Hello , ' . $name . '</p>
            <p style="margin: 0; box-sizing: border-box; padding: 4px 0px;">Thank You For Join NTR ESPORTS</p>
            <p style="margin: 0; box-sizing: border-box; padding: 4px 0px;">Match Date : ' . $matchTime . '</p>
            <br style="margin: 0; padding: 0; box-sizing: border-box;">
            <p style="margin: 0; box-sizing: border-box; padding: 4px 0px;">
            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nihil impedit iusto! Esse id vel, illo sunt iure eum error ipsum est expedita in, sit voluptates magnam quae quas saepe.
            
            </p>
            <br style="margin: 0; padding: 0; box-sizing: border-box;">
         
            <a href="http://localhost/myteam?id=' . $tid . '&email=' . $email . '" class="btn" style="box-sizing: border-box; margin: 15px 0px; display: block; background-color: #276bd9; padding: 14px 18px; width: 180px; text-decoration: none; text-align: center; color: #fff;">Show Your Team</a>
        
            </div>
        <header style="margin: 0; box-sizing: border-box; width: 100%; padding: 20px 0px; background-color: #232324; color: #fff;">
            <center style="margin: 0; padding: 0; box-sizing: border-box;">

                <p style="margin: 0; box-sizing: border-box; padding: 4px 0px;">@2023 - NTR ESPORTS</p>

            </center>
        </header>
    
    </main>';
    smtp_mailer($email, 'Thank You For Join - NTR ESPORTS', $html);
}
