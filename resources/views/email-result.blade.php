<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Draft | AI Email Assistant</title>
    <style>
        body {
            margin: 0;
            padding: 30px 20px;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        main {
            max-width: 750px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #2563eb;
        }

        .detail {
            margin-top: 24px;
        }

        .label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .content {
            padding: 15px;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main>
        <h1>Email Draft Preview</h1>

        <p>Your submitted details are ready for the next stage of email generation.</p>

        <div class="detail">
            <p class="label">Recipient context</p>
            <div class="content">{{ $recipient ?: 'Not specified' }}</div>
        </div>

        <div class="detail">
            <p class="label">Email tone</p>
            <div class="content">{{ ucfirst($tone) }}</div>
        </div>

        <div class="detail">
            <p class="label">Your notes</p>
            <div class="content">{{ $notes }}</div>
        </div>

        <a href="{{ url('/') }}">← Back to the email assistant</a>
    </main>
</body>
</html>
