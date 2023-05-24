<?php 
  namespace App\Traits;

  trait ApiResponse{
    public function apiSuccess($data, $code = 200, $message = null){
      return response()->json([
        'data' => $data,
        'message' => $message
      ], $code);
    }

    public function apiError($errors, $code,$message = null){
      return response()->json([
        'message' => $message,
        'errors' => $errors
      ], $code);
    }
  }
?>