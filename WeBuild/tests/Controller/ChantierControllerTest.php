<?php

namespace App\Test\Controller;

use App\Entity\Chantier;
use App\Repository\ChantierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChantierControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ChantierRepository $repository;
    private string $path = '/chantier/crud/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Chantier::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chantier index');

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
            'chantier[nom]' => 'Testing',
            'chantier[Description]' => 'Testing',
            'chantier[remuneration]' => 'Testing',
            'chantier[Start_date]' => 'Testing',
        ]);

        self::assertResponseRedirects('/chantier/crud/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chantier();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setRemuneration('My Title');
        $fixture->setStart_date('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chantier');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chantier();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setRemuneration('My Title');
        $fixture->setStart_date('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'chantier[nom]' => 'Something New',
            'chantier[Description]' => 'Something New',
            'chantier[remuneration]' => 'Something New',
            'chantier[Start_date]' => 'Something New',
        ]);

        self::assertResponseRedirects('/chantier/crud/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getRemuneration());
        self::assertSame('Something New', $fixture[0]->getStart_date());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Chantier();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setRemuneration('My Title');
        $fixture->setStart_date('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/chantier/crud/');
    }
}
