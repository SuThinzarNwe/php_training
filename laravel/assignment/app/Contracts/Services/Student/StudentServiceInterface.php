<?php

namespace App\Contracts\Services\Student;

use App\Models\Student;
use App\Models\Task;
use Illuminate\Http\Request;

/**
 * Interface for post service
 */
interface StudentServiceInterface
{
    /**
     * Home Page Function to show data
     * @param Request
     */
    public function index();

    /**
     * Search Function
     * @param Request $request
     */
    public function search(Request $request);

    /**
     * Show the form for creating a new resource.
     */
    public function create();

    /**
     * Show the form for editing the specified resource.
     * @param Student $id
     */
    public function edit(Student $id);

    /**
     * Delete Function
     * @param Student $student
     */
    public function destory($id);

    /**
     * Store Function
     * @param Request $request
     */
    public function store(Request $request);

    /**
     * Update Function
     * @param Request $request, @param Student $student
     */
    public function update(Request $request, $id);

    /**
     * Export Function
     * @return \Illuminate\Support\Collection
     */
    public function export();

    /**
     * Import Function
     * @return \Illuminate\Support\Collection
     */
    public function import();
<<<<<<< HEAD

    /**
     * Send Mail to created user email
     */
    public function sendMail();

    /**
     * Send Student Data to email
     */
    public function sendMailData();
=======
>>>>>>> a39aeb12da0187907b2813aee10ee0dabb6df30a
}
