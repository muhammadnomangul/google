
use Google\Cloud\Speech\SpeechClient;

/**
* Transcribe an audio file using Google Cloud Speech API
* Example:
* ```
* transcribe_sync('/path/to/audiofile.wav');
* ```.
*
* @param string $audioFile path to an audio file.
* @param string $languageCode The language of the content to
*     be recognized. Accepts BCP-47 (e.g., `"en-US"`, `"es-ES"`).
* @param array $options configuration options.
*
* @return string the text transcription
*/
function transcribe_sync($audioFile, $languageCode = 'en-US', $options = [])
{
// Create the speech client
$speech = new SpeechClient([
'languageCode' => $languageCode,
]);

// Make the API call
$results = $speech->recognize(
fopen($audioFile, 'r'),
$options
);

// Print the results
foreach ($results as $result) {
$alternative = $result->alternatives()[0];
printf('Transcript: %s' . PHP_EOL, $alternative['transcript']);
printf('Confidence: %s' . PHP_EOL, $alternative['confidence']);
}
}