function sum_time($total) {
    $seconds = 0;
    foreach ($total as $time)
    {
        list($hour,$minute,$second) = explode(':', $time);
        $seconds += $hour*3600;
        $seconds += $minute*60;
        $seconds += $second;
    }
    $hours = floor($seconds/3600);
    $seconds -= $hours*3600;
    $minutes  = floor($seconds/60);
    $seconds -= $minutes*60;

    return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}

$total = ['10:00:00','23:31:00','13:12:11'];

echo sum_time($total);