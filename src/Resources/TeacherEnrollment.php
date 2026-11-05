<?php

namespace Eduframe\Resources;

use Eduframe\Resource;
use Eduframe\Traits\FindAll;

class TeacherEnrollment extends Resource
{
    use FindAll;

    protected array $fillable = [
        'id',
        'planned_course_id',
        'teacher_id',
        'teacher_role_id',
        'teacher',
        'teacher_role',
        'updated_at',
        'created_at'
    ];

    protected string $endpoint = 'teacher_enrollments';

    protected string $namespace = 'teacher_enrollment';

    protected array $singleNestedEntities = [
        'teacher' => Teacher::class,
    ];

    public function forPlannedCourse(int $plannedCourseId): static {
        $resource = clone $this;
        $resource->endpoint = "planned_courses/{$plannedCourseId}/teacher_enrollments";

        return $resource;
    }
}
