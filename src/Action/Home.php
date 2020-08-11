<?php

namespace App\Action;

use App\Repository\UserRepository;
use App\Responder\ViewResponder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class Home
 * @package App\Action
 *
 * @Route("/", name="home")
 */
final class Home
{

    /** @var UserRepository */
    protected $userRepository;

    /**
     * Home constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param ViewResponder $view
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __invoke(ViewResponder $view)
    {
        $user = $this->userRepository->findOneBy(['firstName' => 'Damien', 'lastName' => 'Riviere']);

        return $view('home.html.twig', ['user' => $user]);
    }
}
