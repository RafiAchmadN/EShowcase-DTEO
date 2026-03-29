import { Head, Link } from '@inertiajs/react';
import { useState } from 'react';

export default function Welcome({ auth, projects }) {
    const [searchQuery, setSearchQuery] = useState('');
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    // Filter proyek berdasarkan pencarian
    const filteredProjects = projects ? projects.filter(project => 
        project.title.toLowerCase().includes(searchQuery.toLowerCase())
    ) : [];

    return (
        <div className="min-h-screen bg-gray-100 font-sans text-gray-900">
            <Head title="Beranda - DTEO Project Exhibition" />

            {/* --- HEADER NAVIGASI --- */}
            <header className="bg-white shadow-sm sticky top-0 z-50">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-16 items-center">
                        {/* Logo Kiri */}
                        <div className="flex-shrink-0 flex items-center gap-2">
                            {/* Ganti src dengan logo asli Anda nanti di folder public/ */}
                            <div className="w-10 h-10 bg-blue-600 text-white flex items-center justify-center font-bold rounded-full">DTEO</div>
                            <span className="font-bold text-blue-800 text-lg hidden sm:block">PROJECT EXHIBITION</span>
                        </div>

                        {/* Menu Desktop */}
                        <nav className="hidden md:flex space-x-8 items-center">
                            <Link href="/" className="text-orange-500 font-semibold border-b-2 border-orange-500 flex items-center gap-1">
                                <span className="text-blue-800">🏠</span> Beranda
                            </Link>
                            <Link href="#" className="text-gray-600 hover:text-blue-600 font-semibold">Proyek</Link>
                            
                            {/* Dropdown Penilaian */}
                            <div className="relative group cursor-pointer">
                                <span className="text-gray-600 hover:text-blue-600 font-semibold flex items-center gap-1">
                                    Penilaian Mahasiswa ▾
                                </span>
                                <div className="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg hidden group-hover:block z-10">
                                    <Link href="#" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Penilaian Dosen</Link>
                                    <Link href="#" className="block px-4 py-2 text-gray-700 hover:bg-gray-100">Penilaian Pembimbing</Link>
                                </div>
                            </div>
                            
                            <Link href="#" className="text-gray-600 hover:text-blue-600 font-semibold">Lokasi</Link>

                            {/* Tombol Login/Dashboard */}
                            {auth.user ? (
                                <Link href={route('dashboard')} className="text-blue-600 font-semibold">Dashboard</Link>
                            ) : (
                                <Link href={route('login')} className="text-blue-600 font-semibold">Log in</Link>
                            )}
                        </nav>
                        
                        {/* Logo ITS Kanan */}
                        <div className="hidden md:block w-10 h-10 bg-blue-800 rounded-full"></div>
                    </div>
                </div>
            </header>

            {/* --- BAR TANGGAL --- */}
            <div className="bg-[#00b4d8] text-white px-8 py-4 shadow-inner">
                <h1 className="text-3xl font-bold">Jum'at</h1>
                <p className="text-lg">27 Maret 2026</p>
            </div>

            <main className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
                
                {/* --- HERO SECTION (VIDEO & INFO) --- */}
                <section className="bg-white rounded-lg shadow p-6 flex flex-col md:flex-row gap-6">
                    <div className="md:w-1/2 aspect-video bg-gray-200 rounded overflow-hidden">
                        {/* Embed YouTube Placeholder */}
                        <iframe 
                            className="w-full h-full" 
                            src="https://www.youtube.com/embed/1D12Re0IPZs?si=4zWLG9Uakns9VxRc" 
                            title="YouTube video player" 
                            frameBorder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowFullScreen>
                        </iframe>
                    </div>
                    <div className="md:w-1/2 flex flex-col justify-center">
                        <h2 className="text-2xl font-bold text-gray-800 mb-2">Departemen Teknik Elektro Otomasi</h2>
                        <p className="text-gray-600 text-sm mb-4">
                            Departemen Teknik Elektro Otomasi (DTEO) merupakan salah satu departemen di dalam Fakultas Vokasi ITS yang berkonsentrasi pada bidang otomasi industri...
                        </p>
                        <h3 className="text-xl font-bold text-gray-800 mb-2">DTEO Project Exhibition</h3>
                        <p className="text-gray-600 text-sm mb-6">
                            DTEO Project Exhibition merupakan Platform Sistem Informasi milik Departemen bertujuan untuk meningkatkan visibilitas...
                        </p>
                        <div className="flex gap-4">
                            {/* Placeholder Logos */}
                            <div className="h-12 w-24 bg-gray-200 rounded"></div>
                            <div className="h-12 w-24 bg-gray-200 rounded"></div>
                            <div className="h-12 w-12 bg-gray-200 rounded-full"></div>
                        </div>
                    </div>
                </section>

                {/* --- SEARCH BAR --- */}
                <section>
                    <div className="bg-[#00a8e8] p-2 rounded-t-lg">
                        <input 
                            type="text" 
                            placeholder="🔍 Cari Disini" 
                            className="w-full bg-[#0077b6] text-white placeholder-blue-200 border-none rounded px-4 py-2 focus:ring-2 focus:ring-white"
                            value={searchQuery}
                            onChange={(e) => setSearchQuery(e.target.value)}
                        />
                    </div>
                </section>

                {/* --- PROJECT GRID --- */}
                <section className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {filteredProjects.length > 0 ? (
                        filteredProjects.map((project) => (
                            <div key={project.id} className="bg-white border rounded-lg shadow hover:shadow-lg transition flex flex-col items-center text-center p-4">
                                <div className="w-full aspect-video bg-gray-100 rounded mb-4 overflow-hidden flex items-center justify-center">
                                    {project.thumbnail ? (
                                        <img src={`/storage/${project.thumbnail}`} alt={project.title} className="object-cover w-full h-full" />
                                    ) : (
                                        <span className="text-gray-400">Gambar Proyek</span>
                                    )}
                                </div>
                                <h4 className="font-bold text-gray-800 text-sm uppercase mb-4 h-10 line-clamp-2">{project.title}</h4>
                                <Link href={`/projects/${project.id}`} className="mt-auto bg-[#4361ee] text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition">
                                    DETAIL PROJECT
                                </Link>
                            </div>
                        ))
                    ) : (
                        <div className="col-span-full text-center text-gray-500 py-10 bg-white rounded shadow">
                            Belum ada proyek yang diunggah.
                        </div>
                    )}
                </section>

            </main>

            {/* --- FOOTER --- */}
            <footer className="bg-[#023e8a] text-white py-8 mt-12 border-t-4 border-[#00b4d8]">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div className="flex items-center gap-4">
                        <div className="w-16 h-16 bg-white rounded-full flex items-center justify-center text-blue-900 font-bold">Logo</div>
                        <div className="text-sm text-blue-100">
                            <p className="font-bold">Departemen Teknik Elektro Otomasi - Fakultas Vokasi - ITS</p>
                            <p>Gedung AA & BB Kampus ITS Sukolilo - Surabaya 60111</p>
                            <p>Telp : 031-5947319, Fax : 031-5947318</p>
                            <p>Email : tu_elektrootomasi[at]its.ac.id</p>
                        </div>
                    </div>
                    <div className="text-center md:text-right">
                        <p className="font-bold mb-2">Temukan Kami</p>
                        <div className="flex gap-4 justify-center md:justify-end text-xl">
                            <a href="#" className="hover:text-blue-300">📱</a>
                            <a href="#" className="hover:text-blue-300">🐦</a>
                            <a href="#" className="hover:text-blue-300">▶️</a>
                            <a href="#" className="hover:text-blue-300">📷</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    );
}