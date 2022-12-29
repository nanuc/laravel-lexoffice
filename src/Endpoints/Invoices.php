<?php

namespace Nanuc\LaravelLexoffice\Endpoints;

use Nanuc\LaravelLexoffice\DataObjects\DocumentFile;
use Nanuc\LaravelLexoffice\DataObjects\Invoice;

class Invoices extends Endpoint
{
    public function retrieveInvoice(Invoice $invoice)
    {
        return Invoice::from($this->get('invoices/' . $invoice->id));
    }

    public function createInvoice(Invoice $invoice, $finalize = false)
    {
        return Invoice::from($this->post('invoices?finalize=' . ($finalize ? 'true' : 'false'), $invoice));
    }

    public function renderInvoiceDocument(Invoice $invoice)
    {
        return DocumentFile::from($this->get('invoices/' . $invoice->id . '/document'));
    }
}
