<h2>Pesan Baru dari Website Desa Air Senggeris</h2>

<p><strong>Nama:</strong> {{ $messageData->nama }}</p>
<p><strong>Email:</strong> {{ $messageData->email }}</p>
<p><strong>Subjek:</strong> {{ $messageData->subjek ?? '-' }}</p>
<p><strong>Pesan:</strong></p>
<p>{{ $messageData->pesan }}</p>

<hr>
<p>Dikirim pada {{ $messageData->created_at->format('d M Y, H:i') }}</p>
