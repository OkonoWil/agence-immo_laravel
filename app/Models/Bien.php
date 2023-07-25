<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Bien
 *
 * @property int $id
 * @property string $titre
 * @property float $surface
 * @property float $prix
 * @property string $description
 * @property int $pieces
 * @property int $chambre
 * @property int $etage
 * @property string $adresse
 * @property string $ville
 * @property int $code_postal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Option> $options
 * @property-read int|null $options_count
 * @method static \Illuminate\Database\Eloquent\Builder|Bien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bien newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bien query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereChambre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereCodePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereEtage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien wherePieces($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereSurface($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bien whereVille($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @mixin \Eloquent
 */
class Bien extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'description', 'surface', 'prix', 'pieces', 'chambres', 'etage', 'adresse', 'ville', 'code_postal'
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
