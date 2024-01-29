<?php

namespace App\Http\Controllers\Dashboards\Admin\Services;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\SingleServiceRequest;
use App\Repositories\Interfaces\Services\SingleServiceRepositoryInterface;

class SingleServiceController extends Controller
{

    protected $singleService;
    public function __construct(SingleServiceRepositoryInterface $singleService)
    {
        $this->singleService = $singleService;
    }

    public function index()
    {
        return $this->singleService->index();
    }


    public function store(SingleServiceRequest $request)
    {
        return $this->singleService->store($request);
    }



    public function update(SingleServiceRequest $request, Service $singleService)
    {
        return $this->singleService->update($request, $singleService);
    }


    public function destroy(Service $singleService)
    {
        return $this->singleService->destroy( $singleService);
    }
}
