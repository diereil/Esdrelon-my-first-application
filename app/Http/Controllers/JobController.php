<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
         $jobs = \App\Models\JobListing::with('employer', 'tags')
        ->latest('updated_at') // show recently updated/created first
        ->paginate(10);

    return view('jobs.index', compact('jobs'));
    }

   public function create()
{
    $employers = \App\Models\Employer::all();
    $tags = \App\Models\Tag::all();

    return view('jobs.create', compact('employers', 'tags'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
        'employer_id' => 'required|exists:employers,id',
        'tags' => 'array',
    ]);

    $job = \App\Models\Job::create($request->only(['title', 'salary', 'employer_id']));

    if ($request->has('tags')) {
        $job->tags()->sync($request->tags);
    }

    return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
}

    // Show a single job
    public function show(JobListing $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show edit form
    public function edit(JobListing $job)
    {
      $employers = \App\Models\Employer::all();
    $tags = \App\Models\Tag::all(); // 👈 this was missing

    return view('jobs.edit', compact('job', 'employers', 'tags'));
    }

public function update(Request $request, JobListing $job)
{ $validated = $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|string|max:255',
        'employer_id' => 'required|exists:employers,id',
        'tags' => 'array',
    ]);

    $job->update($validated);

    if ($request->has('tags')) {
        $job->tags()->sync($request->tags);
    }

    return redirect()->route('jobs.index')
        ->with('success', 'Job updated successfully!');
}

public function destroy(JobListing $job)
{
    $job->delete();
    return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
}

}
