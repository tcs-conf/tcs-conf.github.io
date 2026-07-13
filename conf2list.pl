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

my $acronym = '';
my $name = '';
while (length($acronym) == 0) {
    print STDERR "Acronym of the conference (e.g. FOCS, STOC, ...): ";
    $acronym = <>;
    chomp $acronym;
    if (length($acronym) == 0) {
        print STDERR "Acronym of the conference cannot be empty\n";
    } elsif (!($acronym =~ /[a-zA-Z0-9\-\+\_]+/)) {
        print STDERR "Acronym of the conference can contain ONLY letters, digits, and the signs -(dash), +(plus), and _(underscore)\n";
    } elsif (exists $conferences{$acronym}) {
        print STDERR "Conference with acronym $acronym already exists in the list\n";
    } else {
        last;
    }
    $acronym = "";
}

while (length($name) == 0) {
    print STDERR "Full title of the conference: ";
    $name = <>;
    chomp $name;
    if (length($name) == 0) {
        print STDERR "Full title of the conference cannot be empty\n";
    } elsif ($name =~ /=>/) {
        print STDERR "Full title of the conference cannot contain the substring =>\n";
    } else {
        last;
    }
    $name = "";
}

$conferences{$acronym} = $name;

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
