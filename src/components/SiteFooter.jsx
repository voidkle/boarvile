const wp = window.__WP__ || { site_url: '/', site_name: 'Advantage Marine' }

const galleryImages = [
  'https://i.imgur.com/znZcB5W.jpeg',
  'https://i.imgur.com/69AzrKx.jpeg',
  'https://i.imgur.com/4OlK5qu.jpeg',
  'https://i.imgur.com/Ks1oTF4.jpeg',
  'https://i.imgur.com/ug2zNp7.jpeg',
  'https://i.imgur.com/mwsEGVY.jpeg'
]

const quickLinks = [
  { label: 'Home',                 url: '/' },
  { label: 'About Us',             url: '/about-us' },
  { label: 'Our Services',         url: '/services' },
  { label: 'Our Current Projects', url: '/projects' },
  { label: 'Latest News',          url: '/news' },
  { label: 'Contact Us',           url: '/contact-us' },
  { label: 'Company Profile',      url: 'https://www.advantagemarine.com.my/wp-content/uploads/2026/06/AMS-Company-Profile-2026.pdf' },
]

const socials = [
  { icon: 'fa-brands fa-facebook-f',  url: '#', label: 'Facebook'  },
  { icon: 'fa-brands fa-twitter',   url: '#', label: 'Twitter'   },
  { icon: 'fa-brands fa-linkedin-in', url: '#', label: 'LinkedIn'  },
  { icon: 'fa-brands fa-instagram',   url: '#', label: 'Instagram' },
]

const bottomLinks = [
  { label: 'Home',                url: '/' },
  { label: 'About Us',            url: '/about-us' },
  { label: 'Contact Us',          url: '/contact-us' },
  { label: 'Company Profile PDF', url: 'https://www.advantagemarine.com.my/wp-content/uploads/2026/06/AMS-Company-Profile-2026.pdf' },
  { label: 'News',                url: '/news' },
]

export default function SiteFooter() {
  return (
    <footer className="bg-[#07264a] text-white text-sm">
      <div className="mx-auto px-[5%] pt-14 pb-6">

        {/* 4-column grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">

          {/* Col 1 — Contact Us */}
          <div>
            <h3 className="text-[#f5b018] uppercase font-semibold mb-5 text-[1.1rem] tracking-wide border-b-2 border-[#f5b018] pb-3 relative">
              Contact Us
            </h3>
            <p className="flex gap-3 text-[#cbd5e1] leading-relaxed mb-4">
              <i className="fas fa-map-marker-alt text-[#f5b018] mt-1 shrink-0" />
              <span>
                <strong>Main Office:</strong><br />
                No. 15 Jalan Laman Setia 73, Taman Laman Setia,
                81550 Gelang Patah, Johor Malaysia
              </span>
            </p>
            <p className="flex gap-3 text-[#cbd5e1] leading-relaxed mb-5">
              <i className="fas fa-map-marker-alt text-[#f5b018] mt-1 shrink-0" />
              <span>
                <strong>KL Office:</strong><br />
                Suite Unit 506-1 Second Floor, Plaza Kelana Jaya,
                Jalan SS7/13A, Kelana Jaya, 47301 Selangor Malaysia
              </span>
            </p>
            <div className="flex gap-2">
              {socials.map(s => (
                <a
                  key={s.label}
                  href={s.url}
                  aria-label={s.label}
                  className="w-9 h-9 rounded flex items-center justify-center bg-white/10 hover:bg-[#f5b018] transition-colors text-white"
                >
                  <i className={s.icon} />
                </a>
              ))}
            </div>
          </div>

          {/* Col 2 — Contact Info */}
          <div>
            <h3 className="text-[#f5b018] uppercase font-semibold mb-5 text-[1.1rem] tracking-wide border-b-2 border-[#f5b018] pb-3">
              Contact Info
            </h3>
            <p className="flex gap-3 text-[#cbd5e1] leading-relaxed mb-4">
              <i className="fas fa-phone-alt text-[#f5b018] mt-1 shrink-0" />
              <span>
                +60 7 559 5557<br />
                +60 16 669 3350<br />
                +65 8299 3027 Andrew<br />
                +65 9299 3030 Victor
              </span>
            </p>
            <p className="flex gap-3 text-[#cbd5e1]">
              <i className="fas fa-envelope text-[#f5b018] mt-1 shrink-0" />
              <span>sales@advantagemarine.com.my</span>
            </p>
          </div>

          {/* Col 3 — Quick Links */}
          <div>
            <h3 className="text-[#f5b018] uppercase font-semibold mb-5 text-[1.1rem] tracking-wide border-b-2 border-[#f5b018] pb-3">
              Quick Links
            </h3>
            <ul className="space-y-3">
              {quickLinks.map(link => (
                <li key={link.label}>
                  <a
                    href={link.url}
                    className="text-[#cbd5e1] hover:text-[#f5b018] hover:pl-1.5 transition-all flex items-center gap-2"
                  >
                    <i className="fas fa-chevron-right text-[#f5b018] text-xs" />
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Col 4 — Gallery */}
          <div>
            <h3 className="text-[#f5b018] uppercase font-semibold mb-5 text-[1.1rem] tracking-wide border-b-2 border-[#f5b018] pb-3">
              Gallery
            </h3>
            <div className="grid grid-cols-3 gap-2">
              {galleryImages.map((src, i) => (
                <img
                  key={i}
                  src={src}
                  alt={`Gallery image ${i + 1}`}
                  className="w-full aspect-square object-cover rounded opacity-80 hover:opacity-100 hover:scale-105 transition-all cursor-pointer"
                  loading="lazy"
                  width={150}
                  height={150}
                />
              ))}
            </div>
          </div>

        </div>

        {/* Footer Bottom */}
        <div className="border-t border-white/10 pt-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-[#94a3b8] text-xs flex-wrap">
          <span>
            &copy; {new Date().getFullYear()} {wp.site_name} Services. All rights reserved.
          </span>
          <div className="flex flex-wrap gap-x-5 gap-y-2 justify-center">
            {bottomLinks.map(link => (
              <a
                key={link.label}
                href={link.url}
                className="hover:text-[#f5b018] transition-colors"
              >
                {link.label}
              </a>
            ))}
          </div>
        </div>

      </div>
    </footer>
  )
}