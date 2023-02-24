<?php

namespace App\Test\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private UserRepository $repository;
    private string $path = '/user/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(User::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('User index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'user[email]' => 'Testing',
            'user[roles]' => 'Testing',
            'user[password]' => 'Testing',
            'user[FirestName]' => 'Testing',
            'user[LastName]' => 'Testing',
            'user[image]' => 'Testing',
            'user[Adress]' => 'Testing',
            'user[tel]' => 'Testing',
            'user[DateOfBirth]' => 'Testing',
            'user[PetsListId]' => 'Testing',
            'user[IdContrat]' => 'Testing',
            'user[paimentMethod]' => 'Testing',
        ]);

        self::assertResponseRedirects('/user/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setFirestName('My Title');
        $fixture->setLastName('My Title');
        $fixture->setImage('My Title');
        $fixture->setAdress('My Title');
        $fixture->setTel('My Title');
        $fixture->setDateOfBirth('My Title');
        $fixture->setPetsListId('My Title');
        $fixture->setIdContrat('My Title');
        $fixture->setPaimentMethod('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('User');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setFirestName('My Title');
        $fixture->setLastName('My Title');
        $fixture->setImage('My Title');
        $fixture->setAdress('My Title');
        $fixture->setTel('My Title');
        $fixture->setDateOfBirth('My Title');
        $fixture->setPetsListId('My Title');
        $fixture->setIdContrat('My Title');
        $fixture->setPaimentMethod('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'user[email]' => 'Something New',
            'user[roles]' => 'Something New',
            'user[password]' => 'Something New',
            'user[FirestName]' => 'Something New',
            'user[LastName]' => 'Something New',
            'user[image]' => 'Something New',
            'user[Adress]' => 'Something New',
            'user[tel]' => 'Something New',
            'user[DateOfBirth]' => 'Something New',
            'user[PetsListId]' => 'Something New',
            'user[IdContrat]' => 'Something New',
            'user[paimentMethod]' => 'Something New',
        ]);

        self::assertResponseRedirects('/user/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getRoles());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getFirestName());
        self::assertSame('Something New', $fixture[0]->getLastName());
        self::assertSame('Something New', $fixture[0]->getImage());
        self::assertSame('Something New', $fixture[0]->getAdress());
        self::assertSame('Something New', $fixture[0]->getTel());
        self::assertSame('Something New', $fixture[0]->getDateOfBirth());
        self::assertSame('Something New', $fixture[0]->getPetsListId());
        self::assertSame('Something New', $fixture[0]->getIdContrat());
        self::assertSame('Something New', $fixture[0]->getPaimentMethod());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new User();
        $fixture->setEmail('My Title');
        $fixture->setRoles('My Title');
        $fixture->setPassword('My Title');
        $fixture->setFirestName('My Title');
        $fixture->setLastName('My Title');
        $fixture->setImage('My Title');
        $fixture->setAdress('My Title');
        $fixture->setTel('My Title');
        $fixture->setDateOfBirth('My Title');
        $fixture->setPetsListId('My Title');
        $fixture->setIdContrat('My Title');
        $fixture->setPaimentMethod('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/user/');
    }
}
