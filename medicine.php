<?php
// Enable error reporting to troubleshoot if there are any issues.
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .medicines {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin: 10px;
            padding: 15px;
            text-align: center;
        }

        .card h3 {
            color: #333;
        }

        .card p {
            color: #555;
        }

        .add-to-cart {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Medicines</h1>
        <div class="medicines">
            <?php
            // Define a list of medicines
            $medicines = [
                ["name" => "Paracetamol", "benefits" => "Relieves pain and fever"],
                ["name" => "Aspirin", "benefits" => "Reduces inflammation, pain, and fever"],
                ["name" => "Ibuprofen", "benefits" => "Relieves pain, inflammation, and fever"],
                ["name" => "Amoxicillin", "benefits" => "Antibiotic used to treat infections"],
                ['name' => 'Pevetin', 'benefits' => 'Cream Econazole Nitrate + Triamcinolone Acetonide'],
                ['name' => 'Peracitamol', 'benefits' => 'For pain and fever relief'],
                ['name' => 'Moov', 'benefits' => 'Pain relief ointment'],
                ['name' => 'Montair', 'benefits' => 'For allergies and asthma'],
                ['name' => 'Serup', 'benefits' => 'Cough syrup'],
                ['name' => 'Gas-x', 'benefits' => 'Relieves gas and bloating'],
                ['name' => 'Dermasol', 'benefits' => 'For skin conditions'],
                ['name' => 'Napa-serup', 'benefits' => 'Pain and fever relief'],
                ['name' => 'ORS', 'benefits' => 'Used to prevent or treat dehydration caused by diarrhea, vomiting, or excessive sweating'],
                ['name' => 'Vitamin C', 'benefits' => 'Boosts immunity and supports skin health'],
                ['name' => 'Ibuprofen', 'benefits' => 'Pain relief and reduces inflammation'],
                ['name' => 'Paracetamol', 'benefits' => 'Fever and pain reliever'],
                ['name' => 'Cetirizine', 'benefits' => 'Antihistamine for allergy relief'],
                ['name' => 'Amoxicillin', 'benefits' => 'Antibiotic used to treat infections'],
                ['name' => 'Aspirin', 'benefits' => 'Pain reliever and anti-inflammatory'],
                ['name' => 'Vitamin D', 'benefits' => 'Helps absorb calcium and supports bone health'],
                ['name' => 'Loperamide', 'benefits' => 'Anti-diarrheal medication'],
                ['name' => 'Ciprofloxacin', 'benefits' => 'Antibiotic used to treat infections'],
                ['name' => 'Azithromycin', 'benefits' => 'Antibiotic used to treat bacterial infections'],
                ['name' => 'Metformin', 'benefits' => 'Used to treat type 2 diabetes'],
                ['name' => 'Levothyroxine', 'benefits' => 'Used to treat hypothyroidism'],
                ['name' => 'Diphenhydramine', 'benefits' => 'Antihistamine used for allergy symptoms'],
                ['name' => 'Hydrochlorothiazide', 'benefits' => 'Diuretic used for high blood pressure'],
                ['name' => 'Pantoprazole', 'benefits' => 'Proton pump inhibitor for stomach acid issues'],
                ['name' => 'Clopidogrel', 'benefits' => 'Antiplatelet medication for heart disease'],
                ['name' => 'Furosemide', 'benefits' => 'Diuretic for heart and kidney conditions'],
                ['name' => 'Metoprolol', 'benefits' => 'Beta-blocker for heart conditions'],
                ['name' => 'Simvastatin', 'benefits' => 'Used to lower cholesterol levels'],
                ['name' => 'Zinc', 'benefits' => 'Essential mineral for immune function and wound healing'],
                ['name' => 'Azithromycin', 'benefits' => 'Antibiotic used to treat bacterial infections'],
                ['name' => 'Metformin', 'benefits' => 'Used to treat type 2 diabetes'],
                ['name' => 'Levothyroxine', 'benefits' => 'Used to treat hypothyroidism'],
                ['name' => 'Diphenhydramine', 'benefits' => 'Antihistamine used for allergy symptoms'],
                ['name' => 'Hydrochlorothiazide', 'benefits' => 'Diuretic used for high blood pressure'],
                ['name' => 'Pantoprazole', 'benefits' => 'Proton pump inhibitor for stomach acid issues'],
                ['name' => 'Clopidogrel', 'benefits' => 'Antiplatelet medication for heart disease'],
                ['name' => 'Furosemide', 'benefits' => 'Diuretic for heart and kidney conditions'],
                // You can add more medicines here
            ];

            // Loop through the medicines and display each one
            foreach ($medicines as $medicine) {
                echo "
                <div class='card'>
                    <h3>{$medicine['name']}</h3>
                    <p>Benefits: {$medicine['benefits']}</p>
                    <button class='add-to-cart'>Add to Cart</button>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</body>
</html>

