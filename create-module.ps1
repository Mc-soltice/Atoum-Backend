param(
  [Parameter(Mandatory = $true)]
  [string]$ModuleName
)

# Définir la racine
$root = "app\Modules\$ModuleName"

# Liste des sous-dossiers
$folders = @(
  "Controllers",
  "Requests",
  "Services",
  "Repositories",
  "Models",
  "Events",
  "Listeners",
  "Notifications",
  "Resources"
)

# Créer la racine si elle n'existe pas
if (-not (Test-Path $root)) {
  New-Item -ItemType Directory -Path $root | Out-Null
  Write-Host "Module créé : $root"
}

# Boucle pour créer chaque sous-dossier et un fichier de base
foreach ($folder in $folders) {
  $path = Join-Path $root $folder
  if (-not (Test-Path $path)) {
    New-Item -ItemType Directory -Path $path | Out-Null
    Write-Host "Dossier créé : $path"
  }

  # Création d’un fichier de base par dossier
  switch ($folder) {
    "Controllers" { $file = "$path\$ModuleName" + "Controller.php" }
    "Requests" { $file = "$path\$ModuleName" + "Request.php" }
    "Services" { $file = "$path\$ModuleName" + "Service.php" }
    "Repositories" { $file = "$path\$ModuleName" + "Repository.php" }
    "Models" { $file = "$path\$ModuleName" + ".php" }
    "Events" { $file = "$path\$ModuleName" + "Event.php" }
    "Listeners" { $file = "$path\$ModuleName" + "Listener.php" }
    "Notifications" { $file = "$path\$ModuleName" + "Notification.php" }
    "Resources" { $file = "$path\$ModuleName" + "Resource.php" }
  }

  if ($file -and -not (Test-Path $file)) {
    New-Item -ItemType File -Path $file | Out-Null
    Write-Host "Fichier créé : $file"
  }
}

# .\create-module.ps1 -ModuleName "Product"
