<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateApiDoc extends Command
{
  protected $signature = 'api:docs:generate';
  protected $description = 'Générer la documentation API Swagger';

  public function handle(): void
  {
    $this->info('Génération de la documentation API...');

    // Nettoyer le cache
    Artisan::call('cache:clear');

    // Générer la documentation
    Artisan::call('l5-swagger:generate');

    $this->info('Documentation générée avec succès !');
    $this->line('URL de la documentation : ' . url('api/documentation'));
    $this->line('URL du fichier JSON : ' . url('docs/api-docs.json'));
  }
}