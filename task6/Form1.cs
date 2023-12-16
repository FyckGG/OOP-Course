using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;
using System.Windows.Forms;
using static System.Windows.Forms.PaintEventArgs;

namespace task6
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        Thread th1;
        Thread th2;
        Thread th3;



        bool drawing = true;

        private void Form1_load(object sender, EventArgs e)
        {

            th1 = new Thread(Draw);
            th1.IsBackground = true;
            th1.Start();

            th2 = new Thread(Draw);
            th2.IsBackground = true;
            th2.Start();

            th3 = new Thread(Draw);
            th3.IsBackground = true;
            th3.Start();
        }

        public void Draw()
        {
            Graphics g;
            Graphics fG;
            Bitmap btm;

            btm = new Bitmap(580, 580);
            g = Graphics.FromImage(btm);
            fG = CreateGraphics();

            float angle = 0.0f;
            PointF org = new PointF(250, 250);
            float rad = 250;
            Pen pen = new Pen(Brushes.Azure, 3.0f);
            Pen pr_pen = new Pen(Brushes.Black, 3.0f);
            RectangleF area = new RectangleF(30, 30, 500, 500);
            RectangleF circle = new RectangleF(0, 0, 50, 50);

            PointF loc = PointF.Empty;
            PointF img = new PointF(20, 20);

            fG.Clear(Color.Black);

            RectangleF pr_circle = new RectangleF(0, 0, 50, 50); 

            while (drawing)
            {

                g.DrawEllipse(pen, area);
                loc = CirclePoint(rad, angle, org);

                circle.X = loc.X - (circle.Width / 2) + area.X;
                circle.Y = loc.Y - (circle.Height / 2) + area.Y;

                g.DrawEllipse(pen, circle);
                g.DrawEllipse(pr_pen, pr_circle);

                pr_circle.X = circle.X;
                pr_circle.Y = circle.Y;

                fG.DrawImage(btm, img);

                if (angle < 360)
                {
                    angle += 0.5f;
                } else
                {
                    angle = 0;
                }
            }

        }


        public PointF CirclePoint(float radius, float angleInDegrees, PointF origin)
        {
            float x = (float)(radius * Math.Cos(angleInDegrees * Math.PI / 180F)) + origin.X;
            float y = (float)(radius * Math.Sin(angleInDegrees * Math.PI / 180F)) + origin.Y;

            return new PointF(x, y);
        }
    }
}
