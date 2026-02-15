<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation - Vogue Vision</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #1A1A1A;
            padding: 30px;
            text-align: center;
            color: white;
        }
        .logo {
            max-width: 150px;
            margin: 0 auto;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .section {
            margin-bottom: 25px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #DC143C;
        }
        .booking-details {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
        }
        .detail-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
        }
        .detail-label {
            font-weight: 600;
            width: 150px;
            color: #666;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 14px;
            border-top: 1px solid #eee;
            margin-top: 30px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #DC143C;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Vogue Vision Photography</h1>
        <p style="opacity: 0.8;">Portraits with Pulse</p>
    </div>
    
    <div class="container">
        <div class="content">
            <h2>Hello {{ $submission->name }},</h2>
            <p>Thank you for your booking request! We've received your information and will contact you within <strong>24 hours</strong> to confirm your session details.</p>
            
            <div class="section">
                <h3>📋 Your Booking Summary</h3>
                <div class="booking-details">
                    <div class="detail-row">
                        <div class="detail-label">Booking ID:</div>
                        <div class="detail-value">#{{ str_pad($submission->id, 6, '0', STR_PAD_LEFT) }}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Package:</div>
                        <div class="detail-value">
                            @php
                                $packageMap = [
                                    'essential-profile' => 'Essential Profile (299 RON)',
                                    'professional-presence' => 'Professional Presence (599 RON)',
                                    'complete-brand' => 'Complete Brand Package (999 RON)',
                                    'creative-starter' => 'Creative Starter (399 RON)',
                                    'artistic-vision' => 'Artistic Vision (799 RON)',
                                    'ultimate-concept' => 'Ultimate Concept Experience (1,499 RON)',
                                    'not-sure' => 'Not sure yet - need advice'
                                ];
                            @endphp
                            {{ $packageMap[$submission->package] ?? $submission->package }}
                        </div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Project Type:</div>
                        <div class="detail-value">
                            @if($submission->project_type == 'digital-presence')
                                Digital Presence
                            @elseif($submission->project_type == 'artistic-expression')
                                Artistic Expression
                            @else
                                Both
                            @endif
                        </div>
                    </div>
                    @if($submission->preferred_date)
                    <div class="detail-row">
                        <div class="detail-label">Preferred Date:</div>
                        <div class="detail-value">{{ \Carbon\Carbon::parse($submission->preferred_date)->format('F d, Y') }}</div>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class="section">
                <h3>📞 Next Steps</h3>
                <p>1. We'll review your project details and contact you to discuss your vision</p>
                <p>2. We'll schedule a consultation call (15-20 minutes)</p>
                <p>3. We'll confirm the date, location, and final details</p>
                <p>4. You'll receive a confirmation email with all the information</p>
            </div>
            
            <div class="section">
                <h3>📍 Our Location</h3>
                <p><strong>Vogue Vision Photography</strong><br>
                Bucharest, Romania<br>
                Email: cirlaandrei7@yahoo.com<br>
                Phone: +40 712 345 678</p>
                
                <p><strong>Response Time:</strong> Within 24 hours</p>
            </div>
            
            <div style="text-align: center;">
                <p>Have questions? Reply to this email or contact us directly.</p>
                <p>Looking forward to creating amazing portraits with you!</p>
                <p><strong>Andrei Cirlan</strong><br>
                Photographer, Vogue Vision</p>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} Vogue Vision Photography. All rights reserved.</p>
            <p>Bucharest, Romania</p>
            <p>
                <a href="https://www.instagram.com/voguevisionphoto/" style="color: #DC143C;">Instagram</a> | 
                <a href="mailto:cirlaandrei7@yahoo.com" style="color: #DC143C;">Email</a>
            </p>
        </div>
    </div>
</body>
</html>