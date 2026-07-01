<?php

namespace Eduframe\Resources;

use Eduframe\Resource;
use Eduframe\Traits\FindAll;
use Eduframe\Traits\FindOne;

class CourseTab extends Resource
{
    use FindAll, FindOne;

    protected array $fillable = [
        'id',
        'name',
        'position'
    ];
    protected string $endpoint = 'course_tabs';

    protected string $namespace = 'course_tab';

    protected array $singleNestedEntities = [
        'course_tab' => CourseTab::class,
    ];
}
