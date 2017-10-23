<?php
//
//namespace App\Http\Controllers;
//use Google\Cloud\Speech\SpeechClient;
//
//use Illuminate\Http\Request;
//
//class SpeechController extends Controller
//{
//    //
//    function transcribe_sync($audioFile, $languageCode = 'en-US', $options = [])
//    {
//        // Create the speech client
//        $speech = new SpeechClient([
//            'languageCode' => $languageCode,
//        ]);
//
//        // Make the API call
//        $results = $speech->recognize(
//            fopen($audioFile, 'r'),
//            $options
//        );
//
//        // Print the results
//        foreach ($results as $result) {
//            $alternative = $result->alternatives()[0];
//            printf('Transcript: %s' . PHP_EOL, $alternative['transcript']);
//            printf('Confidence: %s' . PHP_EOL, $alternative['confidence']);
//        }
//    }
//
//}
