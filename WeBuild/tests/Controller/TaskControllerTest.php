<?php

namespace App\Test\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private TaskRepository $repository;
    private string $path = '/task/crud/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Task::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Task index');

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
            'task[name]' => 'Testing',
            'task[Priority]' => 'Testing',
            'task[Status]' => 'Testing',
            'task[Description]' => 'Testing',
            'task[Due]' => 'Testing',
            'task[id_chantier]' => 'Testing',
        ]);

        self::assertResponseRedirects('/task/crud/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Task();
        $fixture->setName('My Title');
        $fixture->setPriority('My Title');
        $fixture->setStatus('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDue('My Title');
        $fixture->setId_chantier('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Task');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Task();
        $fixture->setName('My Title');
        $fixture->setPriority('My Title');
        $fixture->setStatus('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDue('My Title');
        $fixture->setId_chantier('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'task[name]' => 'Something New',
            'task[Priority]' => 'Something New',
            'task[Status]' => 'Something New',
            'task[Description]' => 'Something New',
            'task[Due]' => 'Something New',
            'task[id_chantier]' => 'Something New',
        ]);

        self::assertResponseRedirects('/task/crud/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getName());
        self::assertSame('Something New', $fixture[0]->getPriority());
        self::assertSame('Something New', $fixture[0]->getStatus());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getDue());
        self::assertSame('Something New', $fixture[0]->getId_chantier());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Task();
        $fixture->setName('My Title');
        $fixture->setPriority('My Title');
        $fixture->setStatus('My Title');
        $fixture->setDescription('My Title');
        $fixture->setDue('My Title');
        $fixture->setId_chantier('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/task/crud/');
    }
}
