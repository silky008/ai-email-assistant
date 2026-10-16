<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Email Assistant</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        header {
            background: #ffffff;
            padding: 22px 8%;
            border-bottom: 1px solid #e5e7eb;
        }

        header h2 {
            margin: 0;
            color: #2563eb;
        }

        main {
            max-width: 850px;
            margin: 80px auto;
            padding: 20px;
            text-align: center;
        }

        .tagline {
            color: #2563eb;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
        }

        h1 {
            font-size: 42px;
            margin: 18px 0;
        }

        .description {
            color: #6b7280;
            font-size: 18px;
            line-height: 1.7;
        }

        .feature {
            background: #ffffff;
            margin-top: 35px;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .feature h3 {
            margin-top: 0;
        }

        .button {
            display: inline-block;
            margin-top: 15px;
            padding: 13px 24px;
            background: #2563eb;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            main {
                margin: 40px auto;
            }

            h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h2>AI Email Assistant</h2>
    </header>

    <main>
        <p class="tagline">Write smarter with AI</p>

        <h1>Your personal email writing assistant</h1>

        <p class="description">
            Turn your ideas and rough notes into clear, professional emails.
            Choose your preferred tone and let AI help you find the right words.
        </p>

        <section class="feature">
            <h3>Ready to write your next email?</h3>
            <p>
                Soon, you will be able to generate professional emails
                using a locally running AI model.
            </p>
            <a href="#email-form" class="button">Get Started</a>
        </section>
    </main>

    <footer>
        Built with Laravel, PHP, PostgreSQL and local AI.
    </footer>
</body>
</html>
