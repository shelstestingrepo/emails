<?php
$to=$_POST['to'];
$subject = "HTML email";

$message = '
<!doctype html>
<html>

<head>
  <title>Your Premium Invoice is Past Due</title>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
  >
  <style type="text/css">
    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }

    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }


    @media screen and (max-width: 525px) {

      .wrapper {
        width: 100% !important;
        max-width: 100% !important;
      }

      .logo img {
        margin: 0 auto !important;
      }

      .mobile-hide {
        display: none !important;
      }

      .img-max {
        max-width: 100% !important;
        width: 100% !important;
        height: auto !important;
      }

      .responsive-table {
        width: 100% !important;
      }

      .padding {
        padding: 15px 5% 15px 5% !important;
      }

      .padding-meta {
        padding: 30px 5% 0px 5% !important;
        text-align: center;
      }

      .no-padding {
        padding: 0 !important;
      }

      .section-padding {
        padding: 50px 15px 50px 15px !important;
      }

      .mobile-button-container {
        margin: 0 auto;
        width: 100% !important;
      }

      .mobile-button {
        padding: 15px !important;
        border: 0 !important;
        font-size: 16px !important;
        display: block !important;
      }
    }

    div[style*="margin: 16px 0;"] {
      margin: 0 !important;
    }
  </style>
</head>

<body style="margin: 0 !important; padding: 0 !important;">
  <table style="border:none; width:100%; border-collapse: collapse; padding:0">
    <tbody>
      <tr>
        <td
          style="background-color:#ffffff; text-align:center; margin-left: auto; margin-right:auto; padding: 70px 15px 70px 15px;"
          class="section-padding"
        >

          <!--[if (gte mso 9)|(IE)]>
            <table style="background-color:#ffffff; margin-left: auto; margin-right:auto; padding: 0; width:500px;">
            <tr>
            <td valign="top" style="margin-left: auto; margin-right:auto; width:500px;">
            <![endif]-->
          <table
            style="border:none;margin-left: auto; margin-right:auto; border-collapse: collapse; padding:0; max-width: 500px;"
            class="responsive-table"
          >
            <tbody>
              <tr>
                <td>
                  <!-- HERO IMAGE -->

                  <table
                    style="margin-left: auto; margin-right:auto; border:none; width:100%; border-collapse: collapse; padding:0"
                  >
                    <tbody>
                      <tr>
                        <td
                          style="text-align:left; width:80%; padding:5px 5px 10px 5px; font-size: 10px; line-height: 15px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          Reply address - noreply@amtrustgroup.com<br />Subject - "Your Premium Invoice is Past Due"
                        </td>
                      </tr>
                      <tr>
                        <td
                          style="text-align:left; width:80%; padding:5px 5px 10px 5px; font-size: 10px; line-height: 15px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color: #FFFFFF; margin-left:0">
                          <table
                            style="border:none; width:100%; border-collapse: collapse; padding:0; max-width:640px"
                            class="wrapper"
                          >
                            <tbody>
                              <tr>
                                <td style="text-align:center; font-size:24px; color:#FFFFFF; padding:15px 0 15px 0;">
                                  <img
                                    src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/AFSI_Logo.png"
                                    width="100"
                                    height="78"
                                    alt=""
                                  />
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <!-- COPY -->
                          <table style="border:none; width:100%; border-collapse: collapse; padding:0">
                            <tbody>
                              <tr>
                                <td
                                  style="text-align:center; width:100%; padding:30px 15px 15px 15px; font-size: 20px; font-weight: 500; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #2A568F;"
                                >
                                  Reminder - Your Premium Invoice is Past Due </td>
                              </tr>
                              <tr>
                                <td
                                  style="text-align:left; width:80%; padding:15px 15px 30px 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >

                                  Dear Valued Policyholder
                                  <br />Re: <MasterAccountID>
                                    <br />
                                    <br />
                                    This is a reminder that your insurance premium is currently past due. Attached is a
                                    copy of your pending cancellation notice (a copy is also being mailed to the address
                                    on file). Unless our office receives your payment prior to the cancellation date on
                                    the notice, your policy will go into cancellation status.
                                </td>
                              </tr>
                              <tr>
                                <td
                                  style="text-align:left; width:80%; padding:15px 15px 30px 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >
                                  To avoid cancellation and possible lapse in coverage, please <a
                                    href="https://ao.amtrustgroup.com/Insureds/policy-verification"
                                  >click here</a> and enter your
                                  policy number and billing zip code located on the invoice to make your payment using
                                  our Easy Pay Application. Easy Pay offers a quick and simple solution for paying
                                  insurance premiums online with an electronic check or a credit card – no login
                                  required.</td>
                              </tr>

                              <tr>
                                <td
                                  style="text-align:left; width:80%; padding:15px 15px 30px 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >
                                  Or, consider signing up for direct debit with AmTrust AutoPay, which automatically
                                  withdraws your payment from a designated bank account each month. AutoPay eliminates
                                  the hassle of writing a check, calling or entering a payment online and offers peace
                                  of mind, as you’ll never miss a payment or receive late payment penalties.
                                  <br />
                                  <br />
                                  To sign up for AutoPay, <a
                                    href="https://ao.amtrustgroup.com/Insureds/Login.aspx?_ga=2.203484627.292180568.1619628280-1956283814.1617651009"
                                  >log in to AmTrust Online</a> today.
                                  <br />
                                  <br />
                                  Sincerely,
                                  <br />
                                  AmTrust North America
                                </td>
                              </tr>
                              <tr>
                                <td
                                  style="text-align:left; width:80%; padding:15px 15px 30px 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >
                                  This is an automated message. Please do not reply directly as this mailbox is
                                  unattended.</td>
                              </tr>




                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>


              <tr>
                <td>

                  <table
                    style="border:none; width:100%; border-collapse: collapse; padding:0;max-width: 640px;"
                    class="wrapper"
                  >
                    <tbody>


                      <tr>
                        <td>
                          <!-- COPY -->
                          <table style="border:none; width:100%; border-collapse: collapse; padding:0">
                            <tbody>

                              <tr>
                                <td
                                  style="text-align:left; width:50%; padding:30px 15px 15px 30px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >
                                  <img
                                    src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/Go_Green_160.png"
                                    alt="go green image"
                                    style="width:250px; height:236px; display: block; color: #000000;"
                                    class="img-max"
                                  />
                                </td>
                                <td
                                  style="text-align:center; width:50%; padding:0 15px 30px 30px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                                >
                                  <h2
                                    style="Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;color: #555;font-size: 20px;line-height: 28px;"
                                  >
                                    <strong>Save Time. Save Paper.</strong>
                                  </h2><br /><span>Log in to our secure portal,
                                    AmTrust Online, to create an account using the policy number in this email to get
                                    started with the GoGreen program.</span><br /><br />

                                  <![if !mso]><span style="color: #000000;"><a
                                      style="border-radius: 4px;font-size: 12px;font-weight: bold;line-height: 22px;padding: 15px 15px ;text-align: center;color: #ffffff !important;background-color: #2A568F;font-family: Source Sans Pro, Apple SD Gothic Neo, PT Sans, Trebuchet MS, sans-serif; text-decoration: none;"
                                      href="https://cdn2.hubspot.net/hubfs/441687/AmTrust_Go_Green_Tutorial_v3.pdf"
                                    >AMTRUST
                                      ONLINE</a></span>
                                  <![endif]>
                                  <!--[if mso]><p style="line-height:0;margin:0;">&nbsp;</p><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="https://na.createsend1.com/t/t-l-bkrtyhy-l-j/" style="width:122px" arcsize="10%" fillcolor="#2A568F" stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,9px,0px,9px"><center style="font-size:12px;padding: 15px 25px;line-height:22px;color:#FFFFFF;font-family:Source Sans Pro,Apple SD Gothic Neo,PT Sans,Trebuchet MS,sans-serif;font-weight:bold;mso-line-height-rule:exactly;mso-text-raise:4px">AMTRUST ONLINE</center></v:textbox></v:roundrect><![endif]-->
                                </td>

                              </tr>


                            </tbody>
                          </table>
                        </td>
                      </tr>

                      <tr>
                        <td
                          style="text-align:left; width:100%; padding:15px 15px 0 15px; font-size: 14px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          <i>&#42; Pursuant to applicable law, these communications must continue to be sent in hard
                            copy form.</i>
                        </td>
                      </tr>
                      <tr>
                        <td
                          style="text-align:left; width:100%; padding:15px 0 0 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          <i>Please note that invoices are not included in Go Green, and will continue to be mailed.</i>
                        </td>
                      </tr>

                      <tr>
                        <td
                          style="text-align:left; width:100%; padding:15px 0 30px 15px; font-size: 16px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          Thank you for saving time and paper with Go Green. <span style="font-weight:500;">We
                            appreciate your business!</span></td>
                      </tr>

                      <tr style="background-color:#555555;">
                        <td
                          style="text-align:center;width:100%; padding: 30px 0 0 0; font-size: 16px; line-height: 25px; font-family:"Source Sans Pro", sans-serif; color: #000000;"
                        >
                          <span style="Margin-left:15px;Margin-right:15px;"><a
                              href="https://www.facebook.com/amtrustinsurance/"
                              style="text-decoration: none"
                            ><img
                                src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/social-media/facebook_original_white.png"
                                width="38"
                                height="38"
                                alt=""
                              /></a></span>

                          <span style="Margin-left:15px;Margin-right:15px;"><a
                              href="https://www.linkedin.com/company/amtrust-financial-services-inc"
                              style="text-decoration: none"
                            ><img
                                src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/social-media/linkedin_original_white.png"
                                width="38"
                                height="38"
                                alt=""
                              /></a></span>

                          <span style="Margin-left:15px;Margin-right:15px;"><a
                              href="https://twitter.com/AmTrustInsured"
                              style="text-decoration: none"
                            ><img
                                src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/social-media/twitter_original_white.png"
                                width="38"
                                height="38"
                                alt=""
                              /></a></span>

                          <span style="Margin-left:15px;Margin-right:15px;"><a
                              href="https://www.instagram.com/amtrustinsurance/"
                              style="text-decoration: none"
                            ><img
                                src="https://amtcdn.amtrustgroup.com/CDN/AFSI/email-assets/GoGreen/social-media/instagram_original_white.png"
                                width="38"
                                height="38"
                                alt=""
                              /></a></span>
                        </td>
                      </tr>

                      <tr style="background-color:#555555;">
                        <td
                          style="text-align:center;width:100%;padding: 10px 20px 15px 5px; font-size: 14px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color:#FFFFFF;"
                        >
                          <span>&#169; AmTrust Financial 2021</span>
                        </td>
                      </tr>

                      <tr>
                        <td
                          style="text-align:center; width:100%; padding:15px 0 15px 15px; font-size: 12px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          AmTrust Financial Services, Inc, 59 Maiden Lane, 43rd Floor, New York, NY, 10038 , USA |
                          Copyright 2021</td>
                      </tr>

                      <tr>
                        <td
                          style="text-align:center; width:100%; padding:0 0 0 15px; font-size: 12px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          212.220.7120</td>
                      </tr>


                      <tr>
                        <td
                          style="text-align:center; width:100%; padding:0 0 30px 15px; font-size: 12px; line-height: 25px; font-family: "Source Sans Pro", sans-serif; color: #000000;"
                        >
                          You are receiving this email because you recently enrolled with AmTrust Financial.</td>
                      </tr>

                    </tbody>
                  </table>
                </td>
              </tr>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <contact@scicreative.com>' . "\r\n";


mail($to,$subject,$message,$headers);
?>