<?php

/*
 * This file is part of the Reiterus package.
 *
 * (c) Pavel Vasin <reiterus@yandex.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Reiterus\McxInfoBundle\Controller;

use Reiterus\McxInfoBundle\Util\MainDataInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller for information output
 *
 * @package Reiterus\McxInfoBundle\Controller
 * @author Pavel Vasin <reiterus@yandex.ru>
 */
class McxInfoController extends AbstractController
{
    private MainDataInterface $main;
    private array $persons;
    private array $contacts;
    private bool $pretty;

    /**
     * @param MainDataInterface $main
     * @param array $persons
     * @param array $contacts
     * @param bool $pretty
     */
    public function __construct(
        MainDataInterface $main,
        array             $persons = [],
        array             $contacts = [],
        bool              $pretty = false
    )
    {
        $this->main = $main;
        $this->persons = $persons;
        $this->contacts = $contacts;
        $this->pretty = $pretty;
    }

    /**
     * Controller response in json format
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = $this->getResponseData();

        $response = new JsonResponse($data);
        $response->setEncodingOptions($response->getEncodingOptions() | 256);

        if ($this->pretty) {
            $response->setEncodingOptions($response->getEncodingOptions() | 128);
        }

        return $response;
    }

    /**
     * Array to answer
     *
     * @return array
     */
    protected function getResponseData(): array
    {
        return [
            'title' => $this->main->getTitle(),
            'description' => $this->main->getDescription(),
            'address' => $this->main->getAddress(),
            'site' => $this->main->getSite(),
            'contacts' => $this->contacts,
            'persons' => $this->getReadyPersons(),
        ];
    }

    /**
     * Data of officials of the ministry
     *
     * @return array
     */
    protected function getReadyPersons(): array
    {
        $result = [];

        foreach ($this->persons as $items) {
            $list = array_reverse($items->getList());
            $result = array_merge($result, $list);
        }

        return array_reverse($result);
    }
}
