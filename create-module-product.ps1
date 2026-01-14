# Racine du module
$root = "app\Modules\Product"

# Dictionnaire des dossiers et fichiers
$structure = @{
  "Controllers"   = @("CategoryController.php", "ProductController.php")
  "Requests"      = @("StoreCategoryRequest.php", "StoreProductRequest.php", "UpdateStockRequest.php")
  "Services"      = @("CategoryService.php", "ProductService.php")
  "Repositories"  = @("CategoryRepository.php", "ProductRepository.php")
  "Models"        = @("Category.php", "Product.php")
  "Events"        = @("ProductStockLow.php", "ProductOutOfStock.php")
  "Listeners"     = @("SendStockAlertNotification.php")
  "Notifications" = @("ProductStockAlertNotification.php")
  "Resources"     = @("CategoryResource.php", "ProductResource.php")
}

# Créer la racine si elle n'existe pas
if (-not (Test-Path $root)) {
  New-Item -ItemType Directory -Path $root | Out-Null
  Write-Host "Module créé : $root"
}

# Boucle sur chaque dossier et ses fichiers
foreach ($folder in $structure.Keys) {
  $path = Join-Path $root $folder

  # Créer le dossier s'il n'existe pas
  if (-not (Test-Path $path)) {
    New-Item -ItemType Directory -Path $path | Out-Null
    Write-Host "Dossier créé : $path"
  }

  # Créer les fichiers
  foreach ($file in $structure[$folder]) {
    $filePath = Join-Path $path $file
    if (-not (Test-Path $filePath)) {
      New-Item -ItemType File -Path $filePath | Out-Null
      Write-Host "Fichier créé : $filePath"
    }
    else {
      Write-Host "Déjà existant : $filePath"
    }
  }
}
