<?php
$data = array(
    0 => array(
        'id' => 1,
        'name' => 'Foo',
        'image' => array(
            'url' => '/pub/foo.jpg'
        )
    ),
    1 => array(
        'id' => 2,
        'name' => 'Bar',
        'image' => array(
            'url' => '/pub/bar.jpg'
        )
    ),
    2 => array(
        'id' => 3,
        'name' => 'Foo Bar',
        'image' => array(
            'url' => '/pub/foobar.jpg'
        )
    )
);

function pecahArray($data)
{
    foreach ($data as $result) {
        $image = $result['image']['url'];
        $push[] = $image;
    }
    return $push;
}

print_r(pecahArray($data));