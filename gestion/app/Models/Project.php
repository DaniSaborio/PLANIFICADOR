<?php

namespace App\Models;
     use HasFactory;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'user_id',
    ];
     protected static function boot()
    {
        parent::boot();

        // Evento que se dispara ANTES de crear un nuevo proyecto
        static::creating(function ($project) {
            // Si hay un usuario autenticado, asigna qsu ID
            if (auth()->check()) {
                $project->user_id = auth()->id();
            }
        });
    }
     public function getProgressAttribute(): int
    {
        // Contamos el total de tareas asociadas a este proyecto.
        $totalTasks = $this->tasks()->count();

        // Si no hay tareas, el progreso es 0 para evitar división por cero.
        if ($totalTasks === 0) {
            return 0;
        }

        // Contamos cuántas de esas tareas tienen el estado "Completada".
        $completedTasks = $this->tasks()->where('status', 'Completada')->count();

        // Calculamos y redondeamos el porcentaje.
        return round(($completedTasks / $totalTasks) * 100);
    }
}
