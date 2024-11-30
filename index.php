<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php 
        include "view/nav.php";
    ?>
    <div class="container mt-3">
        <h1> Prime Realty Agency</h1>
        <div class="container mb-3">
            <a class="btn btn-primary" href="controler/liste.php">voir les appartemt</a>
            <a class="btn btn-primary" href="controler/ajouter.php">ajouter votre appartemt</a>
        </div>
        <div class="container">
            <p>
            Prime Realty Agency is a full-service real estate company specializing in the buying,
            selling, and renting of residential and commercial properties. With over 10 years of experience,
             we provide personalized solutions to meet the unique needs of our clients.
            </p>
            <div class="container">
                <h2>Services Offered:</h2>
                <ol><li>Property Listings</li>
                   <ul> 
                    <li>Residential homes, apartments, and villas</li>
                    <li>Commercial spaces including offices, warehouses, and retail stores</li>
                   </ul> 
                   <li>Property Management</li>
                   <ul> 
                    <li>Maintenance and tenant management for rental properties</li>
                    <li>Regular inspections and repairs to maintain property value.</li>
                   </ul>
                   <li>Real Estate Consultancy</li> 
                   <ul> 
                    <li>Market analysis to identify the best investment opportunities.</li>
                    <li>Legal and financial advice during transactions.</li>
                   </ul> 
                </ol>

            </div>

        </div>
    </div>
   
</body>
</html>