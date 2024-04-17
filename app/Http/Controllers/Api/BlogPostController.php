<?php

namespace App\Http\Controllers\Api;


use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;


class BlogPostController extends Controller
{

    public function index()
    {
        try {
            $blogPosts = BlogPost::all();
            return response()->json(['data' => $blogPosts], 200);
        } catch (\Exception $e) {
            Log::error('Error deleting blog post: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while deleting the blog post. Please try again later.'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'created_by' => 'required|max:100',
                'blog_created_at' => 'required',
                'tag' => 'required|max:100',
                'slug' => 'required|max:200|unique:blog_posts,slug',
                'status' => 'boolean',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($request->hasFile('image')) {
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $directory = 'blog_images/' . now()->format('Y-m-d');
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory);
                }
                $path = $request->file('image')->storeAs($directory, $imageName);
                $validatedData['image'] = $imageName;
            }

            $blogPost = BlogPost::create($validatedData);

            return response()->json(['message' => 'Blog post created successfully', 'data' => $blogPost], 200);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Validation error', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Error creating blog post: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while creating the blog post. Please try again later.'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $blogPost = BlogPost::findOrFail($id);

            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'created_by' => 'required|max:100',
                'blog_created_at' => 'required',
                'tag' => 'required|max:100',
                'slug' => 'required|max:200|unique:blog_posts,slug',
                'status' => 'boolean',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($request->hasFile('image')) {
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $directory = 'blog_images/' . now()->format('Y-m-d');
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory);
                }
                $path = $request->file('image')->storeAs($directory, $imageName);
                $validatedData['image'] = $imageName;
            }

            $blogPost->update($validatedData);

            return response()->json(['message' => 'Blog post updated successfully', 'data' => $blogPost], 200);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Validation error', 'errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error('Error updating blog post: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while updating the blog post. Please try again later.'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $blogPost = BlogPost::findOrFail($id);
            $blogPost->delete();
            return response()->json(['message' => 'Blog post deleted successfully'], 200);
        } catch (\Exception $e) {
            Log::error('Error deleting blog post: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while deleting the blog post. Please try again later.'], 500);
        }
    }
}
