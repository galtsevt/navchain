<?php
namespace App;
class NavChain
{
    protected array $items = [];

    /**
     * @param string $name
     * @param string $url
     * @return void
     */
    public function add(string $name, string $url):void
    {
        $this->items[] = [
            'name' => $name,
            'url' => $url,
        ];
    }

    /**
     * @param array $array
     * @return void
     */
    public function addList(array $array):void
    {
        foreach($array as $item) {
            $this->items[] = [
                'name' => $item[0],
                'url' => $item[1],
            ];
        }

    }

    /**
     * @return array
     */
    public function getAll():array
    {
        return $this->items;
    }

}