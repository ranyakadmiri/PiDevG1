<?php

namespace App\Controller;

use App\Entity\Assurance;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;


class PdfGeneratorController extends AbstractController
{
    #[Route('/pdf/generator', name: 'app_pdf_generator')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Get some data to populate the PDF (replace this with your own data retrieval logic)
        $AssRepo = $doctrine->getRepository(Assurance::class);
        $Assurances = $AssRepo->findAll(Assurance::class);

        // Configure Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);

        // Instantiate Dompdf with options
        $dompdf = new Dompdf($options);

        // Load HTML content
        $html = $this->renderView('pdf_generator/index.html.twig', ['assurances' => $Assurances]);
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF (inline)
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="sample.pdf"',
        ]);
    }
}
