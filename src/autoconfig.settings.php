<?php
// Add a new configuration set for a new group of domains.
$cfg = $config->add('werzelserver.de');

// Name and short name for the offered service, as used by Mozilla Thunderbird
$cfg->name = 'Mail Services provided by WerzelServer';
$cfg->nameShort = 'WerzelServer';

// Domains for which these settings apply, in lowercase.
$cfg->domains = [ 'werzelserver.de', 'werzel.de', 'werzelmail.de', 'knappemail.de', 'tonzel.eu', 'hobbingen.de', 'seeadler.org' ];

// This is the username associated with the email address. 
$cfg->username = "$email";

// WerzelServer IMAP server for incoming mail, running on port 143 (TLS)
$cfg->addServer('imap', 'mail.werzelserver.de')
    ->withEndpoint('STARTTLS');

// WerzelServer SMTP server for outgoing mail, running on port 587 (TLS)
$cfg->addServer('smtp', 'mail.werzelserver.de')
    ->withEndpoint('STARTTLS', 587);
