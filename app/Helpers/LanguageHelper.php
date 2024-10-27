<?php
namespace App\Helpers;
class LanguageHelper
{
    public static function getModel($modelName)
    {
        // Check the language from the session
        $lang = session('locale', 'en');

        // Use the language suffix to construct the model name
        $modelClass = "App\\Models\\" . $modelName . ($lang == 'ar' ? 'Ar' : 'En');

        return new $modelClass;
    }
}
