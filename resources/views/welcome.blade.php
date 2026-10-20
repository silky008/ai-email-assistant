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

.form-group {
    margin-top: 22px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.form-group input,
.form-group textarea,
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font: inherit;
    background: #ffffff;
}

.form-group textarea {
    resize: vertical;
}

.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
    outline: 2px solid #93c5fd;
    border-color: #2563eb;
}

button.button {
    border: none;
    cursor: pointer;
    font: inherit;
}

.form-note {
    margin-top: 18px;
    color: #6b7280;
    font-size: 14px;
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


<section class="feature" id="email-form">
    <h3>Draft your email</h3>
    <p>Tell us what you want to communicate.</p>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="recipient">Recipient context</label>
            <input
                type="text"
                id="recipient"
                name="recipient"
                placeholder="e.g. Hiring manager, colleague, or client"
            >
        </div>

        <div class="form-group">
            <label for="notes">What should the email say?</label>
            <textarea
                id="notes"
                name="notes"
                rows="6"
                placeholder="Write your rough notes here..."
                required
            ></textarea>
        </div>

        <div class="form-group">
            <label for="tone">Email tone</label>
            <select id="tone" name="tone">
                <option value="professional">Professional</option>
                <option value="friendly">Friendly</option>
                <option value="formal">Formal</option>
                <option value="persuasive">Persuasive</option>
            </select>
        </div>

        <button type="submit" class="button">
            Generate Email
        </button>

        <p class="form-note">
            AI-powered email generation will be connected in a later step.
        </p>
    </form>
</section>

    </main>

    <footer>
        Built with Laravel, PHP, PostgreSQL and local AI.
    </footer>
</body>
</html>
