<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('name')->get();

        return view('admin.tags.index', compact('tags'));
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'Tag créé.');
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'Tag modifié.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()
            ->route('admin.tags.index')
            ->with('success', 'Tag supprimé.');
    }
}