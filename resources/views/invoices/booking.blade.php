<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Booking #{{ $booking->id }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            line-height: 1.3;
            color: #333;
            background: white;
            margin: 0;
            padding: 0;
        }

        .invoice-container {
            width: 210mm;
            height: 297mm; /* Tepat untuk A4 */
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }

        /* Header Section */
        .header {
            background: #2c3e50;
            color: white;
            padding: 8mm 10mm 4mm 10mm;
            page-break-inside: avoid;
        }

        .logo-section {
            display: table;
            width: 100%;
            margin-bottom: 3mm;
        }

        .logo {
            display: table-cell;
            width: 15mm;
            height: 15mm;
            vertical-align: middle;
            text-align: center;
        }

        .logo img {
            width: 15mm;
            height: 15mm;
            object-fit: contain;
        }

        .company-info {
            display: table-cell;
            vertical-align: middle;
            padding-left: 5mm;
        }

        .company-info h1 {
            font-size: 18pt;
            font-weight: bold;
            margin-bottom: 1mm;
            letter-spacing: 1px;
        }

        .company-tagline {
            font-size: 9pt;
            opacity: 0.95;
            font-style: italic;
        }

        .company-details {
            margin-top: 2mm;
            font-size: 8pt;
        }

        .company-details div {
            display: inline-block;
            width: 45%;
            vertical-align: top;
            margin-right: 5mm;
        }

        .company-details strong {
            display: block;
            margin-bottom: 1mm;
        }

        /* Invoice Title */
        .invoice-title {
            background: #34495e;
            color: white;
            padding: 4mm 10mm;
            page-break-inside: avoid;
        }

        .invoice-title .left {
            float: left;
        }

        .invoice-title .right {
            float: right;
            text-align: right;
        }

        .invoice-number h2 {
            font-size: 12pt;
            margin-bottom: 1mm;
        }

        .invoice-number .booking-id {
            font-size: 10pt;
            font-weight: bold;
            color: #f39c12;
        }

        .invoice-date {
            font-size: 8pt;
        }

        .invoice-date strong {
            display: block;
            margin-bottom: 1mm;
        }

        /* Content */
        .content {
            padding: 5mm 10mm;
        }

        .section-title {
            font-size: 10pt;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 2mm;
            padding-bottom: 1mm;
            border-bottom: 1px solid #3498db;
        }

        /* Booking Details Table */
        .booking-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 4mm;
            page-break-inside: avoid;
        }

        .booking-table tr {
            border-bottom: 1px solid #ecf0f1;
        }

        .booking-table td {
            padding: 2mm 3mm;
            vertical-align: top;
        }

        .booking-table .label {
            font-weight: bold;
            color: #2c3e50;
            width: 35%;
            background: #f8f9fa;
            font-size: 8pt;
        }

        .booking-table .value {
            color: #34495e;
            font-size: 8pt;
        }

        .booking-table .highlight {
            background: #e8f5e8;
            font-weight: bold;
            color: #27ae60;
        }

        /* Status Badge */
        .status-badge {
            display: inline-block;
            padding: 1mm 2mm;
            border-radius: 5mm;
            font-size: 7pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-confirmed {
            background: #d5f4e6;
            color: #27ae60;
            border: 1px solid #27ae60;
        }

        .status-pending {
            background: #fef9e7;
            color: #f39c12;
            border: 1px solid #f39c12;
        }

        .status-cancelled {
            background: #fadbd8;
            color: #e74c3c;
            border: 1px solid #e74c3c;
        }

        /* Total Section */
        .total-section {
            background: #2c3e50;
            color: white;
            padding: 4mm;
            text-align: center;
            margin: 4mm 0;
            border-radius: 2mm;
            page-break-inside: avoid;
        }

        .total-label {
            font-size: 9pt;
            margin-bottom: 1mm;
            opacity: 0.9;
        }

        .total-amount {
            font-size: 16pt;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Guest Information */
        .guest-info {
            background: #f8f9fa;
            border-left: 3mm solid #3498db;
            padding: 3mm;
            margin: 3mm 0;
            page-break-inside: avoid;
        }

        .guest-info h3 {
            color: #2c3e50;
            font-size: 9pt;
            margin-bottom: 2mm;
        }

        .guest-details {
            display: table;
            width: 100%;
        }

        .guest-item {
            display: table-row;
            margin-bottom: 1mm;
        }

        .guest-item strong {
            display: table-cell;
            color: #2c3e50;
            width: 30%;
            padding-right: 2mm;
            font-size: 8pt;
        }

        .guest-item span {
            display: table-cell;
            font-size: 8pt;
        }

        /* Footer */
        .footer {
            background: #ecf0f1;
            padding: 3mm 10mm;
            text-align: center;
            border-top: 1px solid #bdc3c7;
            font-size: 7pt;
            color: #7f8c8d;
            margin-top: 4mm;
        }

        .contact-info {
            margin-bottom: 2mm;
        }

        .thank-you {
            font-style: italic;
            color: #2c3e50;
            font-weight: bold;
        }

        /* Print Specific */
        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .invoice-container {
                width: 210mm;
                height: 297mm;
                margin: 0;
                padding: 0;
            }

            .header, .invoice-title, .content, .footer {
                page-break-inside: avoid;
            }
        }

        .no-break {
            page-break-inside: avoid;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Header Section -->
        <div class="header no-break">
            <div class="logo-section">
                <div class="logo">
                    <img src="https://syukrontour.com/assets/images/logo.png" alt="Syukron Tours Logo" onerror="this.style.display='none';">
                </div>
                <div class="company-info">
                    <h1>SYUKRON TOURS</h1>
                    <div class="company-tagline">Paket Umroh Terpercaya & Amanah</div>
                </div>
            </div>

            <div class="company-details">
                <div><strong>ALAMAT</strong> Pekanbaru, Riau</div>
                <div><strong>WEBSITE</strong> www.syukrontour.com</div>
            </div>
        </div>

        <!-- Invoice Title -->
        <div class="invoice-title no-break">
            <div class="left">
                <div class="invoice-number">
                    <h2>INVOICE BOOKING</h2>
                    <div class="booking-id">#{{ $booking->id }}</div>
                </div>
            </div>
            <div class="right">
                <div class="invoice-date">
                    <strong>Tanggal Invoice:</strong>
                    {{ now()->format('d F Y') }}<br>
                    {{ now()->format('H:i') }} WIB
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Booking Details -->
            <div class="section-title">DETAIL BOOKING</div>

            <table class="booking-table no-break">
                <tr>
                    <td class="label">Hotel</td>
                    <td class="value">{{ $booking->kamarHotel->hotel->nama_hotel ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label">Tipe Kamar</td>
                    <td class="value">{{ $booking->kamarHotel->nama_kamar ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label">Tanggal Check-in</td>
                    <td class="value">{{ $booking->check_in_date ? $booking->check_in_date->format('d F Y') : 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label">Tanggal Check-out</td>
                    <td class="value">{{ $booking->check_out_date ? $booking->check_out_date->format('d F Y') : 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="label">Jumlah Kamar</td>
                    <td class="value">{{ $booking->room_quantity }} Kamar</td>
                </tr>
                <tr>
                    <td class="label">Status Booking</td>
                    <td class="value">
                        <span class="status-badge status-{{ strtolower($booking->status) }}">
                            {{ $booking->status }}
                        </span>
                    </td>
                </tr>
                <tr class="highlight">
                    <td class="label">Total Harga</td>
                    <td class="value"><strong>Rp {{ number_format($booking->total_price ?? 0, 0, ',', '.') }}</strong></td>
                </tr>
            </table>

            <!-- Guest Information -->
            <div class="guest-info no-break">
                <h3>👤 INFORMASI TAMU</h3>
                <div class="guest-details">
                    <div class="guest-item">
                        <strong>Nama Lengkap:</strong>
                        <span>{{ $booking->guest_name ?? 'N/A' }}</span>
                    </div>
                    <div class="guest-item">
                        <strong>Email:</strong>
                        <span>{{ $booking->guest_email ?? 'N/A' }}</span>
                    </div>
                    <div class="guest-item">
                        <strong>No. Telepon:</strong>
                        <span>{{ $booking->guest_phone ?? 'N/A' }}</span>
                    </div>
                    @if ($booking->user)
                    <div class="guest-item">
                        <strong>User Account:</strong>
                        <span>{{ $booking->user->name ?? 'N/A' }}</span>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Total Payment -->
            <div class="total-section no-break">
                <div class="total-label">TOTAL PEMBAYARAN</div>
                <div class="total-amount">Rp {{ number_format($booking->total_price ?? 0, 0, ',', '.') }}</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="contact-info">
                <span>Pekanbaru, Riau</span>
                <span>www.syukrontour.com</span>
            </div>
            <div class="thank-you">
                ✨ Terima kasih telah memilih Syukron Tours ✨
            </div>
        </div>
    </div>
</body>
</html>
