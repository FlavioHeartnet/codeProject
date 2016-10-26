<?php

namespace codeProject\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codeProject\Repositories\ProjectNoteRepository;
use codeProject\Entities\ProjectNote;
use codeProject\Validators\ProjectNoteValidator;

/**
 * Class ProjectNoteRepositoryEloquent
 * @package namespace codeProject\Repositories;
 */
class ProjectNoteRepositoryEloquent extends BaseRepository implements ProjectNoteRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProjectNote::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
