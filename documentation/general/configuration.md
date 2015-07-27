## Configuration

```
protected $fields = [
    'date' => [
        'type' =>  'anomaly.field_type.datetime',
        'config' => [
            'mode'        => 'datetime',
            'timezone'    => 'default',
            'date_format' => 'j F, Y',
            'year_range'  => '-50:+50',
            'time_format' => 'g:i A',
            'step'        => 15
        ]
    ]
];
```

**mode**: datetime, date, or time.  
**timezone**: Can be any valid php timezone.  
**date_format**: Can use any of the [options here](http://php.net/manual/en/function.date.php) to format the date.  
**year_range**: Number of years to go in the past and into the future.  
**time_format**: Can use any of the [options here](http://php.net/manual/en/function.date.php) to format the time.  
**step**: The number of minutes to step between.  