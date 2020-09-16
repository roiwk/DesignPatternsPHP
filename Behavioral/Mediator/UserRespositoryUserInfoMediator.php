<?php

namespace Behavioral\Mediator;


class UserRespositoryUserInfoMediator implements MediatorInterface
{
    /**
     * 用户存储
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * 用户信息输出
     *
     * @var UserInfo
     */
    private $ui;

    public function __construct(UserRepository $userRepository, UserInfo $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user)
    {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}