<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>Laravel & Google mail</title>
    <style>
        body {
            font-family: "Nunito Sans", sans-serif;
            background-color: #F3F3F4;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            background-color: #7746C1;
            border-radius: 12px;
            padding: 60px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            color: #fff;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .content {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .logo {
            margin: 20px 0;
            width: 50px;
            height: 50px;
        }
        .head {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }
        .subtext {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }
        .otp {
            letter-spacing: 10px;
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            color: #ffffff;
            font-size: 14px;
            margin-top: 10px;
        }
        .footer p {
            margin: 0;
        }
        .footer a {
            color: #fff;
            text-decoration: underline;
            margin: 0 5px;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .header {
                font-size: 24px;
            }
            .otp {
                font-size: 28px;
                letter-spacing: 8px;
            }
        }

        @media (max-width: 400px) {
            .header {
                font-size: 20px;
            }
            .otp {
                font-size: 24px;
                letter-spacing: 5px;
            }
            .head {
                font-size: 16px;
            }
            .subtext {
                font-size: 12px;
            }
            .footer {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Test Mail</div>

        <div class="content">
            <img src="{{ asset('mail.jpg') }}" alt="Logo" class="logo" width="80" height="80">
            <p class="head">Here is your One Time Password</p>
            <p class="subtext">to validate your email address</p>
            <p class="otp">{{ $data['otp'] }}</p>
            <p class="subtext">The Test Mail Team</p>
        </div>

        <div class="footer">
            <p>FAQs | <a href="#">Terms & Conditions</a> | <a href="#">Contact us</a></p>
        </div>
    </div>
</body>
</html>
