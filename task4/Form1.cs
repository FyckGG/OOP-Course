using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace task4
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }


        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            String text = "Language: " + comboBox1.Text;

            label1.Text = text;
        }

        private void checkBox1_OnCheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                this.BackColor = Color.DimGray;
            }
            else {
                this.BackColor = Color.AliceBlue;
            }
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            if (textBox1.Text.Length > 0) {
                label2.Text = "Hello, " + textBox1.Text;
            } else {
                label2.Text = "";
            }
        }
    }
}
