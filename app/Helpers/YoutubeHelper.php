<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

if (!function_exists('getLiveChannels')) {
    function getLiveChannels(array $channelIds)
    {
        // Cache selama 5 menit
        return Cache::remember('live_channels', 500, function () use ($channelIds) {
            $apiKey = config('services.youtube.key');
            $liveChannels = [];

            foreach ($channelIds as $channelId) {
                $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
                    'part' => 'snippet',
                    'channelId' => $channelId,
                    'eventType' => 'live',
                    'type' => 'video',
                    'key' => $apiKey,
                ]);

                if ($response->ok() && isset($response['items'][0])) {
                    $item = $response['items'][0];
                    $liveChannels[] = [
                        'title' => $item['snippet']['title'],
                        'channelTitle' => $item['snippet']['channelTitle'],
                        'thumbnail' => $item['snippet']['thumbnails']['medium']['url'],
                        'videoId' => $item['id']['videoId'],
                    ];
                }
            }

            return $liveChannels;
        });
    }
}
