<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Retrieve and return a specific insurance quote by its ID.
     *
     * @param int $id The unique identifier of the quote.
     * @return JsonResponse Returns the quote data or a 404 error if not found.
     */
    public function show(int $id): JsonResponse
    {
        // Attempt to find the quote in the database using the provided ID
        $quote = Quote::find($id);

        // Check if the record exists to prevent sending empty data
        if (!$quote) {
            return response()->json([
                'status' => 'error',
                'message' => 'Quote not found'
            ], 404);
        }

        // Return the found quote as a JSON response with a 200 OK status
        return response()->json($quote);
    }
}
