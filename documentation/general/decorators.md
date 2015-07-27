## Decorators

#### Format

` {{ entry.datetime.format('m/d/y') }} `

Format the datetime  
**Date format**: Can use any of the [options here](http://php.net/manual/en/function.date.php) to format the date.

#### Local

` {{ entry.datetime.local('m/d/y') }} `

Get the datetime in the local user timezone with a specific format  
**Date format**: Can use any of the [options here](http://php.net/manual/en/function.date.php) to format the date.

#### Time Ago

` {{ entry.datetime.timeAgo }} `

Return the "time ago" formatted string.
