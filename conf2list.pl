#!/usr/bin/perl

# adds a conference to the list of watched conferences
# interactive

# Upload to
# tcs-conf.github.io

if (scalar @ARGV > 2) {
    die "+++ Usage: $0 [<conf-list.txt>]\n";
} elsif (scalar @ARGV == 0) {
    push @ARGV, 'conf-list.txt';
    print STDERR "File conf-list.txt will be used\n";
}

my $list = shift @ARGV;
print STDERR "Treating file $list\n";

# Read list of conferences from $list
open($input,  "<:encoding(UTF-8)",  "$list") or die "Cannot open $list: $!\n";
my %conferences;
while (my $line = <$input>) {
    chomp $line;
    my @line = split /=>/, $line;
    $conferences{$line[0]} = $line[1];
}
close $input;

print STDERR "You can add several conferences in a loop.\n";
print STDERR "Terminate with CTRL-D.\n\n";

my $short_name = '';
my $full_name = '';
while (length($short_name) == 0) {
    print STDERR "Short name of the conference (e.g. FOCS, STOC, ...): ";
    $short_name = <>;
    if (!defined $short_name) {
        print STDERR "\nFINISHED\n";
        exit;
    }
    chomp $short_name;
    if (length($short_name) == 0) {
        print STDERR "Short name of the conference cannot be empty\n";
        print STDERR "Type CTRL-D if you want to finish\n";
    } elsif (!($short_name =~ /[a-zA-Z0-9\-\+\_]+/)) {
        print STDERR "Short name of the conference can contain ONLY letters, digits, and the signs -(dash), +(plus), and _(underscore)\n";
    } elsif (exists $conferences{$short_name}) {
        print STDERR "Conference with name $short_name already exists in the list\n";
    } else {
        last;
    }
    $short_name = "";
}

while (length($full_name) == 0) {
    print STDERR "Full title of the conference: ";
    $full_name = <>;
    if (!defined $full_name) {
        print STDERR "\nAcronym $short_name will be lost\n";
        print STDERR "FINISHED\n";
        exit;
    }
    chomp $full_name;
    if (length($full_name) == 0) {
        print STDERR "Full title of the conference cannot be empty\n";
        print STDERR "Type CTRL-D if you want to finish\n";
    } elsif ($full_name =~ /=>/) {
        print STDERR "Full title of the conference cannot contain the substring =>\n";
    } else {
        last;
    }
    $full_name = "";
}

$conferences{$short_name} = $full_name;

open($output, ">:encoding(UTF-8)", "$list") or die "Cannot open $list: $!\n";
for my $c (sort keys %conferences) {
    print $output "$c=>$conferences{$c}\n";
}
print STDERR "File $list has been overwritten, starting to upload\n";
system("git add $list");
system("git commit $list -m 'automatic commit from " . $0 . " file=$list" . "'") == 0
    or die "No commit possible on $list: $!\n";
system("git push") == 0 || die "Push of $list failed: $!\n";

print STDERR "Finished adding conferences to file $list\n\n";
