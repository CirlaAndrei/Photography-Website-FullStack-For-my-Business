<!DOCTYPE html>
<html>
<head>
    <title>Contact Submissions - Admin</title>
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }
        body { 
            font-family: 'Inter', sans-serif; 
            padding: 20px; 
            background: #f5f5f5; 
        }
        .container { 
            max-width: 1400px; 
            margin: 0 auto; 
        }
        h1 { 
            margin-bottom: 30px; 
            color: #1A1A1A; 
            font-family: 'Playfair Display', serif; 
        }
        .stats { 
            display: flex; 
            gap: 20px; 
            margin-bottom: 30px; 
        }
        .stat-card { 
            background: white; 
            padding: 20px; 
            border-radius: 8px; 
            flex: 1; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .stat-number { 
            font-size: 32px; 
            font-weight: 800; 
            color: #DC143C; 
        }
        .stat-label { 
            color: #666; 
            margin-top: 5px; 
        }
        table { 
            width: 100%; 
            background: white; 
            border-collapse: collapse; 
            border-radius: 8px; 
            overflow: hidden; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
            margin-top: 20px; 
        }
        th, td { 
            padding: 15px; 
            text-align: left; 
            border-bottom: 1px solid #eee; 
        }
        th { 
            background: #1A1A1A; 
            color: white; 
            font-weight: 600; 
        }
        tr:hover { 
            background: #f9f9f9; 
        }
        .badge { 
            display: inline-block; 
            padding: 4px 10px; 
            border-radius: 12px; 
            font-size: 12px; 
            font-weight: 600; 
        }
        .badge-professional { 
            background: rgba(220, 20, 60, 0.1); 
            color: #DC143C; 
        }
        .badge-artistic { 
            background: rgba(230, 218, 200, 0.2); 
            color: #8B7355; 
        }
        .badge-both { 
            background: rgba(26, 26, 26, 0.1); 
            color: #1A1A1A; 
        }
        .message-cell { 
            max-width: 300px; 
        }
        .message-preview { 
            overflow: hidden; 
            text-overflow: ellipsis; 
            white-space: nowrap; 
        }
        .message-full { 
            display: none; 
            margin-top: 10px; 
            padding: 10px; 
            background: #f9f9f9; 
            border-radius: 4px; 
        }
        .toggle-message { 
            color: #DC143C; 
            cursor: pointer; 
            font-size: 12px; 
            margin-top: 5px; 
        }
        .actions { 
            display: flex; 
            gap: 10px; 
        }
        .btn-view, .btn-delete { 
            padding: 5px 10px; 
            border-radius: 4px; 
            font-size: 12px; 
            cursor: pointer; 
            border: none; 
        }
        .btn-view { 
            background: #E6DAC8; 
            color: #1A1A1A; 
        }
        .btn-delete { 
            background: #ffeded; 
            color: #DC143C; 
        }
        .export-btn { 
            background: #DC143C; 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            border-radius: 4px; 
            cursor: pointer; 
            margin-bottom: 20px; 
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Contact Form Submissions</h1>
        
        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">{{ $submissions->count() }}</div>
                <div class="stat-label">Total Submissions</div>
            </div>
            <div class="stat-card">
                @php
                    $digitalCount = $submissions->where('project_type', 'digital-presence')->count();
                @endphp
                <div class="stat-number">{{ $digitalCount }}</div>
                <div class="stat-label">Digital Presence</div>
            </div>
            <div class="stat-card">
                @php
                    $artisticCount = $submissions->where('project_type', 'artistic-expression')->count();
                @endphp
                <div class="stat-number">{{ $artisticCount }}</div>
                <div class="stat-label">Artistic Expression</div>
            </div>
            <div class="stat-card">
                @php
                    $newsletterCount = $submissions->where('newsletter', true)->count();
                @endphp
                <div class="stat-number">{{ $newsletterCount }}</div>
                <div class="stat-label">Newsletter Subscribers</div>
            </div>
        </div>
        
        <!-- Export Button -->
        <a href="/admin/submissions/export" class="export-btn">📥 Export as JSON</a>
        
        @if($submissions->isEmpty())
            <p>No submissions yet.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Package</th>
                        <th>Type</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $sub)
                    @php
                        $packageMap = [
                            'essential-profile' => 'Essential Profile',
                            'professional-presence' => 'Professional Presence',
                            'complete-brand' => 'Complete Brand',
                            'creative-starter' => 'Creative Starter',
                            'artistic-vision' => 'Artistic Vision',
                            'ultimate-concept' => 'Ultimate Concept',
                            'not-sure' => 'Not Sure'
                        ];
                        
                        $type = $sub->project_type;
                        $badgeClass = '';
                        $typeLabel = '';
                        
                        if ($type === 'digital-presence') {
                            $badgeClass = 'badge-professional';
                            $typeLabel = 'Digital';
                        } elseif ($type === 'artistic-expression') {
                            $badgeClass = 'badge-artistic';
                            $typeLabel = 'Artistic';
                        } elseif ($type === 'both') {
                            $badgeClass = 'badge-both';
                            $typeLabel = 'Both';
                        } else {
                            $badgeClass = 'badge-professional';
                            $typeLabel = $type;
                        }
                    @endphp
                    <tr>
                        <td>
                            <div>{{ $sub->created_at->format('M d') }}</div>
                            <small style="color: #666;">{{ $sub->created_at->format('H:i') }}</small>
                        </td>
                        <td><strong>{{ $sub->name }}</strong></td>
                        <td>
                            <div>{{ $sub->email }}</div>
                            @if($sub->phone)
                                <small>{{ $sub->phone }}</small>
                            @endif
                        </td>
                        <td>
                            {{ $packageMap[$sub->package] ?? $sub->package }}
                        </td>
                        <td>
                            <span class="badge {{ $badgeClass }}">{{ $typeLabel }}</span>
                        </td>
                        <td class="message-cell">
                            <div class="message-preview">{{ Str::limit($sub->message, 60) }}</div>
                            <div class="message-full" id="message-full-{{ $sub->id }}">{{ $sub->message }}</div>
                            <div class="toggle-message" onclick="toggleMessage({{ $sub->id }})">Show more</div>
                        </td>
                        <td>
                            <div class="actions">
                                <button class="btn-view" onclick="viewSubmission({{ $sub->id }})">View</button>
                                <form action="/admin/submissions/{{ $sub->id }}" method="POST" style="display: inline;">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="btn-delete" type="submit" onclick="return confirm('Delete this submission?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    
    <script>
    function toggleMessage(id) {
        const fullElement = document.getElementById('message-full-' + id);
        const toggleElement = fullElement.nextElementSibling;
        
        if (fullElement.style.display === 'block') {
            fullElement.style.display = 'none';
            toggleElement.textContent = 'Show more';
        } else {
            fullElement.style.display = 'block';
            toggleElement.textContent = 'Show less';
        }
    }
    
    function viewSubmission(id) {
        alert('View details for submission ' + id + '\n\nIn the future, this will open a modal with full details.');
    }
    </script>
</body>
</html>