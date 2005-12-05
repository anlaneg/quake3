<p>We have not yet had an official release. Nonetheless, you can still get
icculus.org/quake3 packaged for a few Linux distributions or build it yourself from Subversion.</p>
<p class="angryzakk">The Quake 3 engine is open source, this does <strong>not</strong>
mean that Quake 3 Arena the game is free. You must purchase the game to use the data!</p>

<h2>Prerequisites</h2>
<ul>
     <li><a href="http://libsdl.org/">SDL</a> is required, Linux users need development packages if they want to compile the game. You can optionally disable SDL in the Makefile but this configuration is currently untested.</li>
     <li><a href="http://www.openal.org/">OpenAL</a> is required. It is optionally disable-able. Apple Mac OS X 10.4 comes with OpenAL.</li>
     <li><a href="http://subversion.tigris.org/">Subversion</a> is used for acquiring our modified version of the id source code. If you're using a binary package, then you won't need this.</li>
     <li><a href="http://www.apple.com/">Apple Mac OS X</a> users need X Code installed for gcc, and <a href="http://metissian.com/projects/macosx/subversion/">subversion</a> and other interesting things.</li>
</ul>

<h2>Using packages for your Linux Distribution</h2>
<p>If you're lucky your distribution or someone else using it may have already
done all of the work for you.</p>
<ul>
	<li>
		<h3>Gentoo</h3>
		<p><a href="http://www.gentoo.org/">Gentoo</a> users can just <span class="shell">
		emerge quake3</span> to get a recent snapshot of our Subversion repository.</p>
	</li>
	<li>
		<h3>SUSE</h3>
		<p>Ludwig Nussel works on this project and also provides
		<a href="ftp://ftp.gwdg.de/pub/linux/suse/ftp.suse.com/people/lnussel/quake3">
		RPMs for SUSE Linux Enterprise Server.</a> Note that these are just
		the binaries, no scripts or KDE/Gnome launchers to start them. Ludwig also
		mentions that the packages should work on any glibc 2.3 system.</p>
	</li>
	<li>
		<h3>Ubuntu</h3>
		<p>There are i686 <a href="http://www.xs4all.nl/~bruijn9/quake3/breezy/">binaries
		built on Ubuntu</a> made by Pascal de Bruijn. Untar this into /opt/
		or whereever you keep weird isolated installs. There is a decent
		chance these will work on most distributions, these are not
		<span class="shell">.deb</span>s.</p>
	</li>
</ul>

<h2>Check out and build from Subversion</h2>
<p><em>This part assumes Windows users are using <a href="http://www.cygwin.com">Cygwin</a>.
If you aren't, <a href="http://tortoisesvn.tigris.org/">TortoiseSVN</a> is a good
client.</em></p>
<ol>
	<li>Change into a directory that you want the tree to be kept in.</li>
	<li>Check out the source tree:<br />
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3</span>
	<br />
	(You can check out a specific revision with the -r option, like this:
	<span class="shell">svn co svn://svn.icculus.org/quake3/trunk quake3 -r100</span>)
	</li>
	<li>Read the <a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
	file. Really. Do it.</li>
	<li>Compile and install Quake 3:
		<ul>
			<li><h3>Linux and friends</h3>
			<p>Everyone else can compile it themselves</p>
				<ol>
					<li>Install Quake 3 for Linux using the latest point
					release installer. While the Quake3 engine is Free
					Software, you still need to copy over legal PK3s like
					before.</li>
					<li>Change into the top level directory (it contains
					the <span class="shell">ui</span> and
					<span class="shell">code</span> directories.)</li>
					<li>Run <span class="shell">make</span>.</li>
					<li>Set <span class="shell">$COPYDIR</span> to the
					directory you installed Quake3 to and make the copyfiles
					target. Make sure you are changed to the owner of
					this path (probably root).<br />
					<span class="shell">COPYDIR="/opt/quake3" make copyfiles</span>
					</li>
				</ol>
			</li>
			<li><h3>Mac OS X</h3>
			  <p>In a terminal, type make in the quake 3 directory
                             you've downloaded with subversion, then install the latest id patch for
                             OS X (at the bottom of this page), then copy the resulting darwinquake3
                             binary in <span class="shell">code/unix/releaseppc/</span> to
                             <span class="shell">/Applications/Quake3/Quake3.app/Contents/MacOS/Quake3</span>.
                             You also need an /libSDL-1.2.0.dylib in that .app's MacOS directory. You'll need
                             to copy your <span class="shell">pak0.pk3</span> from your Quake 3 cd-rom's
                             <span class="shell">baseq3</span> directory to your
                             <span class="shell">/Applications/Quake3/baseq3/</span> directory. Ditto for the
                             Team Arena mission pack, though you'd be changing <span class="shell">baseq3</span>
                             in the above example to <span class="shell">missionpack</span>.
		          </p>
			 <p>After you've done all of that mess, you can double click on the .app file, or cd to
                        <span class="shell">/Applications/Quake3/</span>in a terminal and type <span class="shell">Quake3.app/Contents/MacOS/Quake3</span>, and hit return.
			</p>
			</li>
			<li><h3>Windows</h3>
				<p>Building on Windows is slightly complicated. You can either
				use Microsoft Visual C++ or MinGW. MinGW works better currently;
				both methods are described in the
				<a href="http://svn.icculus.org/*checkout*/quake3/trunk/README">README</a>
				you already are supposed to have read.</p>
			</li>
		</ul>
	</li>
	<li>If everything has gone well, you should have a binary that works! If not, seek
	<a href="?page=help">help</a>.</li>
</ol>
<h2>Point Release Installers</h2>
<p>The id software patches are still needed before installing
this project because they contain updated <span class="shell">pk3</span>
files. We mirror them for your convienience:</p>
<ul>
	<li><a href="http://filesingularity.timedoctor.org/linuxq3apoint-1.32b-3.x86.run">Linux</a></li>
	<li><a href="http://filesingularity.timedoctor.org/q3pointrelease_132.exe">Windows</a></li>
	<li><a href="http://filesingularity.timedoctor.org/Quake3-132.pkg.sit">Macintosh</a></li>
</ul>
