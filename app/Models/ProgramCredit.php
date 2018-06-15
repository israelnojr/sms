<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\SemesterType;
use App\Models\Level;

/**
 * App\Models\ProgramCredit
 *
 * @property int $id
 * @property int $program_id
 * @property int $semester_type_id
 * @property int $level_id
 * @property int $credit
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProgramCredit whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProgramCredit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProgramCredit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProgramCredit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ProgramCredit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProgramCredit extends BaseModel
{
    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function semesterType() {
        return $this->belongsTo(SemesterType::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }
}
